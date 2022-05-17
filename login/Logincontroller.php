<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index()
    {
        return view('login_dokter');
    }

    public function authenticated(Request $request)
    {
        $credentials = $request -> validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5:max:255'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/Homedokter');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
