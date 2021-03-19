<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;
use App\Models\SubjectValue;
use Illuminate\Support\Facades\DB;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::paginate(25);
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $users = User::all();
        return view('subjects.create', compact('subjects', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjects = Subject::create([
            'user_uuid' => $request->student,
            'name' => $request->subject
        ]);
        
        foreach ($request->value as $key => $value) {
            $alphabet = null;
            if ($value >= 90 && $value <= 100) {
                $alphabet = "A";
            } else if ($value >= 80 && $value <= 89) {
                $alphabet = "B";
            } else if ($value >= 70 && $value <= 79) {
                $alphabet = "C";
            } else if ($value >= 60 && $value <= 69) {
                $alphabet = "D";
            } else {
                $alphabet = "E";
            }
            SubjectValue::create([
                'subject_uuid' => $subjects->uuid,
                'name' => $request->name[$key],
                'value' => $value,
                'alphabet' => $alphabet
            ]);
        }
        return redirect()->route('subjects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($uuid)
    {
        $subject = Subject::with(['user', 'subjectValue'])->find($uuid);
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($uuid)
    {
        $subjects = Subject::with(['user', 'subjectValue'])->find($uuid);
        $users = User::all();
        $subjectValue = SubjectValue::all();
        return view('subjects.edit', compact(['subjects', 'users', 'subjectValue']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $uuid)
    {
        $subject = Subject::find($uuid);
        $subjectValue = SubjectValue::find($uuid);
        $subject -> update ([
            'user_uuid' => $request->student,
            'value' => $request->value,
            'name' => $request->subject,
            
        ]);
        
        $subjectValue -> update([
            'uuid' => $request->name,
            'value' => $request->value,
        ]);
        return redirect()->route('subjects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($uuid)
    {
        DB::table('subjects')->where('uuid', $uuid)->delete();
        return redirect()->route('subjects.index');
    }
}
