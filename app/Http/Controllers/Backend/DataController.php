<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Models\District;
use App\Models\City;

class DataController extends Controller
{
    public function getProvinces()
    { 
        $provinces = Province::pluck("name","uuid");
        return view('users.create',compact('provinces'));
    }

    public function getCitty(Request $request)
    {
        $cites = City::where('province_uuid', $request->province_uuid)->get();
        return response()->json([
            'cites' => $cites
        ]);
    }

    public function getDistrict(Request $request)
    {
        $districts = District::where('city_uuid', $request->city_uuid)->get();
        return response()->json([
            'districts' => $districts
        ]);
    }
}

