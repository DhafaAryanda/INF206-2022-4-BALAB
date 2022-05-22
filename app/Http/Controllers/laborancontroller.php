<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;


class laborancontroller extends Controller
{
    public function index()
    {
        return view('table-pasien', ['post' => dataPasien::all()]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tglPeriksa' => 'required'
        ]); 
        dataPasien::create($validateData);
        return redirect('/laboran')->with('berhasil', 'Berhasil ditambahkan!');
    }

    public function indexProfil()
    {
        return view('profil_laboran',["post" => User::where('id',auth()->user()->id)->get()]);
    }
    
    public function storeProfil(Request $request)
    {
        // return "yey";
        $validateData=$request->validate([
            'nama' => 'required',
            'email' => 'required',
            'namaAwal' => 'required',
            'namaAkhir' => 'required',
            'organisasi' => 'required',
            'lokasi' => 'required',
            'noHP' => 'required',
            'tglLahir' => 'required'
        ]);
        $validateData['user_id'] = auth()->user()->id;
        // return "yey";
        $laboran = DB::table('laborans')->where('user_id',Auth()->user()->id)->get();
        //store
        try{
            if($laboran->contains(1)===false){
                Laboran::create($validateData);
                
             //    return "yey";
            return redirect('/profil/laboran')->with('success', 'Data Berhasil di tambahkan');
             }
         }
         catch(\Exception $e){
             
         }
        
         
         Laboran::where('user_id',$laboran[0]->user_id)
         ->update($validateData);
         
         return redirect('/profil/laboran')->with('update', 'Data Berhasil di update');
       
        
    }
}
