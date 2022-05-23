<?php

namespace App\Http\Controllers;

use App\Models\dataPasien;
use App\Models\pasien;
use App\Models\SisiPasien;
use Illuminate\Http\Request;
use App\Models\Penjelasan;

class SisiPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sisi.pasien.index', [
            'postpenjelasan' => dataPasien::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SisiPasien  $sisiPasien
     * @return \Illuminate\Http\Response
     */
    public function show(SisiPasien $sisiPasien)
    {

        return view('sisi.pasien.index', [
            'postpenjelasan' => dataPasien::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SisiPasien  $sisiPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(SisiPasien $sisiPasien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SisiPasien  $sisiPasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SisiPasien $sisiPasien)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SisiPasien  $sisiPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(SisiPasien $sisiPasien)
    {
        //
    }
}
