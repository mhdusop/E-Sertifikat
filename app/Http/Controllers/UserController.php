<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Backend\User\Create;
use App\Http\Requests\Backend\User\Update;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Province;
use LengthException;
use Ramsey\Uuid\Type\Decimal;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate();
        return view('users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::pluck("name","uuid");
        return view('users.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Create $request)
    {
        $bilangan=12345678;
        $getLastUniqueCode = User::orderBy('created_at', 'desc')->first();
        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request -> password),
            'sebagai'  => $request->sebagai,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'nilai' => $request->nilai,
            // $request = IdGenerator::generate(['table' => 'users', 'length' => 10, 'prefix' => date('ym')])
            'kode_unik' => (int) $getLastUniqueCode->kode_unik + $bilangan
            // $request = IdGenerator::generate(['table' => 'users', 'length' => 8, 'prefix' =>'Comp-'])
        ]);

        return redirect()->route('murid.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $id)
    {
        $users = User::find($id);
        $users -> update ([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => is_null($request->password)? $users->password : Hash::make($request->password),
            'sebagai'  => $request->sebagai,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'nilai' => $request->nilai
        ]);
        return redirect()->route('murid.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $users = User::find($id);
        // $users->delete();

        // return redirect()->route('murid.index')->with('success', 'User has been deleted');   
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('murid.index');
    }

    // Print PDF
    public function print()
    {
        $users = User::all();
        $html = view('users.print', compact('users'));
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();

        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $dompdf = new Dompdf($options);
    }

    public function kode_unik()
    {
        $users = User::all();
        return view('murid_page.index', compact('users'));
    }

}
