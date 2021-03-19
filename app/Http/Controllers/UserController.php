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
        $getLastUniqueCode = User::orderBy('created_at', 'desc')->first();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request -> password),
            'role'  => $request->role,
            'address' => $request->address,
            'phone' => $request->phone,
            'nilai' => $request->nilai,
            'pob' => $request->pob,
            'dob' => $request->dob
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $users = User::with(['subjects.subjectValue'])->find($uuid);
        return view('users.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $users = User::find($uuid);
        return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Update $request, $uuid)
    {
        $users = User::find($uuid);
        $users -> update ([
            'name' => $request->name,
            'email' => $request->email,
            'password' => is_null($request->password)? $users->password : Hash::make($request->password),
            'role'  => $request->role,
            'phone' => $request->phone,
            'pob' => $request->pob,
            'dob' => $request->dob,
            'address' => $request->address,
            'phone' => $request->phone,
            'nilai' => $request->nilai
        ]);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        // $users = User::find($id);
        // $users->delete();

        // return redirect()->route('murid.index')->with('success', 'User has been deleted');   
        DB::table('users')->where('uuid', $uuid)->delete();
        return redirect()->route('users.index');
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
