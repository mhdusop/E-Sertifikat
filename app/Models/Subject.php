<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Subject extends Model
{
    use HasFactory,Uuid;
    
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'uuid',
        'user_uuid',
        'name',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_uuid');
    }
    public function subjectValue() {
        return $this->hasMany('App\Models\SubjectValue', 'subject_uuid');
    }

    protected $casts = [
        'created_at ' => 'datetime',
        'name' => 'string',
        'user_uuid' => 'string'
    ];
}
