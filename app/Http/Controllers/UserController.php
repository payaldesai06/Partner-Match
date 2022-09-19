<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.listing');
    }

    public function getData(Request $request)
    {
        $loginuser = Auth::user();
        if($loginuser->role_id == 1)
        {
            $users = User::where('role_id',2)
            ->select("*",DB::raw("TIMESTAMPDIFF(YEAR, DATE(dob), current_date) AS age"))
            ->orderBy('id','desc')->get();
        }
        else
        {
            $gender = "('male','female')";
            if(@$loginuser->gender)$gender = ($loginuser->gender == 'female') ? "('male')" : "('female')";
            $expected_annual_income_min = $loginuser->expected_annual_income_min ? $loginuser->expected_annual_income_min : 0;
            $expected_annual_income_max = $loginuser->expected_annual_income_max ? $loginuser->expected_annual_income_max : 150000;
            $expected_occupation = $loginuser->expected_occupation ? $loginuser->expected_occupation : NULL;
            $expected_family_type = $loginuser->expected_family_type ? $loginuser->expected_family_type : NULL;
            $expected_manglik_status = $loginuser->expected_manglik_status ? $loginuser->expected_manglik_status : NULL;
            $users = DB::select('SELECT *,(year(CURRENT_TIMESTAMP) - year(dob)) as age, ((CASE WHEN annual_income BETWEEN '.$expected_annual_income_min.' and '.$expected_annual_income_max.' THEN 25 ELSE 0 END) +
            (CASE WHEN occupation = "'.$expected_occupation.'" THEN 25 WHEN occupation IS NULL THEN 0 ELSE 0 END) +
            (CASE WHEN family_type = "'.$expected_family_type.'" THEN 25 WHEN family_type IS NULL THEN 0 ELSE 0 END) +
            (CASE WHEN manglik_status = "'.$expected_manglik_status.'" THEN 25 WHEN manglik_status IS NULL THEN 0 ELSE 0 END)) AS Matches
            FROM users where id != '.$loginuser->id.' and gender in '.@$gender.' and role_id = 2 ORDER BY Matches DESC');
        }
        return view('admin.user.data-list', compact('users'))->render();
    }

}
