<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function __construct()
    {
        // $this->middleware('permission:delete post');
    }
    public function userSetting(Request $request)
    {
        $user = User::all();
        return view('account/accountSetting/master_userAdmin', ['user' => $user]);
    }
    public function userChangeAuthority(Request $request)
    {
        $request->validate([
            'inputState' => ['required', 'exists:roles,id'],
        ]);
        $user = User::find($request->userid);
        if ($request->inputState == 1) {
            $user->syncRoles('admin');
        } else {
            $user->syncRoles('user');
        }
        return redirect('/admin/usersetting');
    }
}
