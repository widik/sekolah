<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.index');
    }

    public function postlogin(Request $request)
    {
        //dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }
        return redirect('/elibrary');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
