<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\User;
use App\Models\dataPasien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class pasienController extends Controller
{
    

    public function indexProfil()
    {
        return view('profil_pasien',["post" => User::where('id',auth()->user()->id)->get()]);
    }
    public function storeProfil(Request $request)
    {
        //  return "yey";
        $validateData=$request->validate([
            
            'nama' => 'required',
            'email' => 'required',
            'namaAwal' => 'required',
            'namaAkhir' => 'required',
            'statusPelayanan' => 'required',
            'lokasi' => 'required',
            'noHP' => 'required',
            'tglLahir' => 'required',
            'uploadGambar' =>'required|image|file|max:5096'
        ]);
        $validateData['user_id'] = auth()->user()->id;
        // return "yey";
        $pasien = DB::table('pasiens')->where('user_id',Auth()->user()->id)->get();
        if($request->file('uploadGambar')){
            $validateData['uploadGambar'] = $request->file('uploadGambar')->store('Gambar');
        //store
        try{
            if($pasien->contains(1)===false){
                pasien::create($validateData);
                
             //    return "yey";
            return redirect('/Profil/pasien')->with('success', 'Data Berhasil di tambahkan');
             }
         }
         catch(\Exception $e){
             
         }
        
         
         pasien::where('user_id',$pasien[0]->user_id)
         ->update($validateData);
         
         return redirect('/Profil/pasien')->with('update', 'Data Berhasil di update');
        }
        
    }
}
