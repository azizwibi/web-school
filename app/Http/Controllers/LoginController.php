<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Auth;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title'=>'login',
            'active'=>'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
        'email'=>'required|email:dns',
        'password'=>'required'
    ]);
    if(auth::attempt($credentials)){
        $request->session()->regenerate();
        return redirect()->intended('/dhasboard');
    }

    return back()->with('LoginError','login failed!');

    }

    public function logout(request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
