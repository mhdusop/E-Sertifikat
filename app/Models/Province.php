<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $guarded = [];

    public function subcategories(){

        return $this->hasMany('App\Models\City', 'district_uuid');

    }
}
