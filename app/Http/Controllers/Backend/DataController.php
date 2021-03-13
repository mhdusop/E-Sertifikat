<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getProvinces()
    { 
        $provinces = DB::table('provinces')->pluck("name","uuid");
        return view('users.create',compact('provinces'));
    }
}

