<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasProfilePhoto, Notifiable, TwoFactorAuthenticatable, Uuid;

    protected $primaryKey = 'uuid';
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'email_verified_at',
        'unique_code',
        'role',
        'phone',
        'province',
        'city',
        'district',
        'address',
        'gender',
        'pob',
        'dob',
        'path_photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
        'email_verified_at'
    ];

    public function subjects() {
        return $this->hasMany('App\Models\Subject', 'user_uuid');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'created_at ' => 'datetime',
        'name' => 'string',
        'email' => 'string',
        'unique_code' => 'integer',
        'role' => 'string',
        'phone' => 'string',
        'province_uuid' => 'string',
        'city_uuid' => 'string',
        'district_uuid' => 'string',
        'address' => 'string',
        'gender' => 'integer',
        'pob' => 'string',
        'dob' => 'date',
        'path_photo' => 'string'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'path_photo',
    ];
}
