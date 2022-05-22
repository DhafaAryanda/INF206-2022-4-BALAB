<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\dataPasien;
use App\Models\User;
use App\Models\Laboran;


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
        $user= User::where('name',$request->nama)->get();
        
        if (Pasien::where('nama',$request->nama)==$request->nama){
            $validateData["pasien_id"]= $user[0]->id;
            $validateData["user_id"]= auth()->user()->id;
            dataPasien::create($validateData);
            return redirect('/sisi/dokter')->with('berhasil', 'Berhasil ditambahkan!');
        }
         // return "berhasil";
         return redirect('/sisi/dokter')->with('gagal', 'Data tidak dapat ditammbahkan, Pasien tidak terdata');
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
        if($request->file('uploadGambar')){
            $validateData['uploadGambar'] = $request->file('uploadGambar')->store('Gambar');
            //return $request->file('faskesPicture')->store('post-image');;
        }
        
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
