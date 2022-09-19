<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'gender' => ['required', 'in:male,female'],
            'dob' => ['required','date'],
            'annual_income' => ['required','numeric'],
            'occupation' => ['required','in:Private job,Government Job,Business'],
            'family_type' => ['required','in:Joint family,Nuclear family'],
            'manglik_status' => ['required','in:0,1'],
            'expected_annual_income' => ['required'],
            'expected_occupation' => ['required','in:Private job,Government Job,Business'],
            'expected_family_type' => ['required','in:Joint family,Nuclear family'],
            'expected_manglik_status' => ['required','in:0,1'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        $range = explode('-',@$data['expected_annual_income']);
        if(@$range[0] && @$range[1]){
            $data['expected_annual_income_min'] = trim($range[0]);
            $data['expected_annual_income_max'] = trim($range[1]);
        }
        $data['role_id'] = 2;
        $user = User::create($data);
        $user->save();
        return $user;
    }
}
