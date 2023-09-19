<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index() {
        return  view('auth/login');
    }
    function login(Request $request) {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)) {
            return redirect('/dash')->with('success','Berhasil Login');
        }else {
            return redirect()->route('login')->with(['login' => 'Username atau password salah!']);
        };
    }

    function logout(){
        Auth::logout();
        return redirect()->route('login')->with(['logout' => 'Berhasil logout']);
    }
};
