<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectValue extends Model
{
    use HasFactory,Uuid;
    
    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'uuid',
        'subject_uuid',
        'name',
        'value',
        'alphabet',
        'created_at',
        'updated_at'
    ];
    protected $casts = [
        'value ' => 'integer',
        'name' => 'string'
    ];
}
