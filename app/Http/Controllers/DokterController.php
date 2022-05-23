<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataPasien;
use App\Models\Dokter;
use App\Models\pasien;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DokterController extends Controller
{
    public function index(){
        return view('sisi-dokter',['post' => dataPasien::all()]);
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'tglPeriksa' => 'required'
        ]); 
        $user= User::where('name',$request->nama)->get();
        $pasien =pasien::where('nama',$request->nama)->get();
        // dd($pasien[0]->nama);
        // dd($user[0]->pasien->id);
        if ($pasien[0]->nama==$request->nama){
            $validateData["user_id"]= $user[0]->id;
            $validateData["pasien_id"]= $user[0]->pasien->id;
            $validateData["dokter_id"]= auth()->user()->id;
            dataPasien::create($validateData);
            return redirect('/sisi/dokter')->with('berhasil', 'Berhasil ditambahkan!');
        }
        // return "berhasil";
        return redirect('/sisi/dokter')->with('gagal', 'Data tidak dapat ditammbahkan, Pasien tidak terdata');
    }
    public function indexProfil()
    {
        return view('profil_dokter',["post" => pasien::where('id',auth()->user()->id)->get()]);
    }
    
    public function storeProfil(Request $request)
    {
        //  return "yey";
        // $request->file('uploadGambar')->store('Gambar');
        $validateData=$request->validate([
            
            'nama' => 'required',
            'email' => 'required',
            'namaAwal' => 'required',
            'namaAkhir' => 'required',
            'organisasi' => 'required',
            'lokasi' => 'required',
            'noHP' => 'required',
            'tglLahir' => 'required',
            'uploadGambar' =>'required|image|file|max:5096'
        ]);
        $validateData['user_id'] = auth()->user()->id;

       $dokter = DB::table('dokters')->where('user_id',Auth()->user()->id)->get();
       if($request->file('uploadGambar')){
        $validateData['uploadGambar'] = $request->file('uploadGambar')->store('Gambar');
        //return $request->file('faskesPicture')->store('post-image');;

        }
       //store
       try{
           if($dokter->contains(1)===false){
               Dokter::create($validateData);
               
            //    return "yey";
           return redirect('/profil/dokter')->with('success', 'Data Berhasil di tambahkan');
            }
        }
        catch(\Exception $e){
            
        }
       
        
        Dokter::where('user_id',$dokter[0]->user_id)
        ->update($validateData);
        
        return redirect('/profil/dokter')->with('update', 'Data Berhasil di update');
         
    }
}
