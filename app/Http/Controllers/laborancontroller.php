<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\User;


class laborancontroller extends Controller
{
    public function index()
    {
        return view('table-pasien', ['post' => pasien::all()]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tanggal_periksa' => 'required'
        ]);
        pasien::create($validateData);
        return $this -> index();
    }
}
