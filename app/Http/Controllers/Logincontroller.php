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

    public function authenticate(Request $request)
    {
        
        $credential = $request -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // return Auth::attempt($credential);
        // return "berhasil";

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/Home/dokter');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
