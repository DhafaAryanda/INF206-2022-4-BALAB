<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pasien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginPasienController extends Controller
{
    public function index(){
        return view('daftar_akun');
    }
    // public function register()
    // {
    //     $data['title'] = '/daftar/akun/pasien';
    //     return view('public function register()', $data);
    // }

    public function store(Request $request)
    {
        $request->validate([
            'noBPJS' => 'required',
            'name' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required'
        ]);
        $pasien = new User([
            'noBPJS' => $request->noBPJS,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $pasien->save();
        // return "yeyy";
        return redirect('/login/pasien')->with('success', 'Registration Success. Please Login!');
    }
    public function authenticate(Request $request)
    {
        
        $credential = $request -> validate([
            'noBPJS' => 'required',
            'password' => 'required'
        ]);
        

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/Home/pasien');
        }

        return back()->with('error', 'No BPJS atau password salah');
    }
}
