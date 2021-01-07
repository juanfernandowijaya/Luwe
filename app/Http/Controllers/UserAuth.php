<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Auth;
use app\Role;

class UserAuth extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth/login');
    }
    public function login(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);
        if (!Auth::attempt($request->only('email', 'password'))) {
            return view('auth/login');
        } else {
            session(['berhasil_login' => true]);
            return view('account/dashboard');
        }
    }
    public function IndexRegister()
    {
        //proses register
        return view('auth/register');
    }
    public function SubmitRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:3|confirmed',
            // 'email' => ['required', 'unique:users,email'],
            // 'password' => ['required', 'confimed', 'min:4'],
        ]);
        $user = new User;
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->isActive = 1;
        $user->assignRole('user');
        $user->save();
        return redirect('/');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
