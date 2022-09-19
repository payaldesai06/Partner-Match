<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Commonhelper;

class User extends Authenticatable
{
    use HasApiTokens;

    protected $fillable = [
        'first_name','last_name','email','password','gender','dob','annual_income','occupation',
        'family_type','manglik_status','expected_annual_income_min','expected_annual_income_max','expected_occupation','expected_family_type',
        'expected_manglik_status','is_active','role_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

     /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
