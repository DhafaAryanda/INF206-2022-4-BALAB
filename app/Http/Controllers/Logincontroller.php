<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index1()
    {
        return view('login_dokter');
    }
    public function index2()
    {
        return view('login_laboran');
    }
    public function index3()
    {
        return view('loginn_pasien');
    }

    public function authenticate1(Request $request)
    {
        // return "/yeeyy";
        $credential = $request -> validate([
            'email' => 'required|email',
            'password' => 'required|'
        ]);
        // return Auth::attempt($credential);
        // return "berhasil";

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/Home/dokter');
        }

        return back()->with('error', 'Email atau password salah');
    }
    public function authenticate2(Request $request)
    {
        
        $credential = $request -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // return Auth::attempt($credential);
        // return "berhasil";

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/Home/laboran');
        }

        return back()->with('error', 'Email atau password salah');
    }
    public function authenticate3(Request $request)
    {
        // return "yeeyy";
        $credential = $request -> validate([
            'noBPJS' => 'required',
            'password' => 'required'
        ]);
        // return Auth::attempt($credential);
        
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            
            // return "berhasil";
            return redirect()->intended('/Home/pasien');
        }

        return back()->with('error', 'Email atau password salah');
    }

    
}
