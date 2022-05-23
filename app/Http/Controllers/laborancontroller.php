<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pasien;
use App\Models\dataPasien;
use App\Models\User;
use App\Models\Laboran;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class laborancontroller extends Controller
{
    public function index()
    {
        return view('table-pasien', ['post' => dataPasien::all()]);
    }
    public function indexSisi(dataPasien $post)
    {
        return view('sisi_laboran', ['post' => $post]);
    }

    
    // public function store(Request $request){
        // $validateData = $request->validate([
        //     'nama' => 'required|max:255',
        //     'tglPeriksa' => 'required'
        // ]); 
        // $user= User::where('name',$request->nama)->get();

        // // dd($request->nama);
        // $pasien =pasien::where('nama',$request->nama)->get();
        // // dd($pasien[0]->nama);
        // // dd($request->nama);
        // if ($pasien[0]->nama==$request->nama){
        //     // return "berhasil";
        //     $validateData["pasien_id"]= $user[0]->id;
        //     $validateData["user_id"]= auth()->user()->id;
        //     $validateData["laboran_id"]= auth()->user()->id;
        //     dataPasien::create($validateData);
        //     return redirect('/laboran')->with('berhasil', 'Berhasil ditambahkan!');
        // }
        //  // return "berhasil";
        //  return redirect('/laboran')->with('gagal', 'Data tidak dapat ditammbahkan, Pasien tidak terdata');
    // }

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
        // dd($laboran->contains(1)==false);

        //store
        try{
            if($laboran->contains(1)== false){
                Laboran::create($validateData);
                
                return redirect('/profil/laboran')->with('success', 'Data Berhasil di tambahkan');
            }
        }
        catch(\Exception $e){
            
        }
        
        // return "yey";
        //  dd($laboran[0]);
         Laboran::where('user_id',$laboran[0]->user_id)
         ->update($validateData);
         
         return redirect('/profil/laboran')->with('update', 'Data Berhasil di update');
       
        
    }

    public function storePDF(Request $request){
        //  return "berhasil";
        $validateData=$request->validate([
            'UploadPDF' => 'required|image|file|max:5024'
        ]);
        //   dd(request());
         if($request->file('UploadPDF')){
            $validateData['UploadPDF'] = $request->file('UploadPDF')->store('Gambar');
            //return $request->file('faskesPicture')->store('post-image');;
    
            }
            $laboran = laboran::where('nama',Auth()->user()->name)->get();
            // dd($laboran[0]);
            $validateData['laboran_id']=$laboran[0]->id ;
            //  dd(Auth()->user()->id);
            dataPasien::where('id',$request->record_id)
            ->update($validateData);
        // $validateData['UploadPDF'] = $request->file('UploadPDF')->store('Gambar');
        return redirect('/laboran')->with('success', 'Data Berhasil di tambahkan');
    }
}
