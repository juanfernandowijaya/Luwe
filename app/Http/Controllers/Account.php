<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;

class Account extends Controller
{
    public function index()
    {
        return view('account/dashboard');
    }
    public function test()
    {
        return view('account/home');
    }
    public function userSetting(Request $request)
    {
        $user = User::find();
        return view('account/accountSetting/master_userAdmin', ['user' => $user]);
    }
    public function userChangeAuthority(Request $request)
    {
        //rubah authority user/admin

    }
}
