<?php

namespace App\Http\Controllers;

use App\Models\dataPasien;
use App\Models\Penjelasan;
use App\Models\SisiLaboran;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sisiLaboranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // select data_pasiens.user_id, laboran_id, penjelasan FROM data_pasiens INNER JOIN laborans ON laboran_id=laborans.id;
        // return dataPasien::where('pasien_id', '=', 'laboran_id')->get();
        // return dataPasien::all();
        //return dataPasien::where('id', auth()->user()->id)->get();
        
        // return $dataPasien = DB::table('data_pasiens')->join('laborans', 'data_pasiens.laboran_id', '=', 'laborans.id')->select('data_pasiens.user_id', 'laboran_id','Penjelasan')->get();
        return view('sisi.laboran.index', [       
            'postpenjelasan' => dataPasien::all()

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
     * @param  \App\Models\SisiLaboran  $sisiLaboran
     * @return \Illuminate\Http\Response
     */
    public function show(SisiLaboran $sisiLaboran)
    {
        return view('sisi.laboran.index', [
            'postpenjelasan' => dataPasien::all()
            //$dataPasien = DB::table('data_pasiens')->join('laborans', 'data_pasiens.laboran_id', '=', 'laborans.id')->select('data_pasiens.user_id', 'laboran_id','Penjelasan')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SisiLaboran  $sisiLaboran
     * @return \Illuminate\Http\Response
     */
    public function edit(SisiLaboran $sisiLaboran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SisiLaboran  $sisiLaboran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SisiLaboran $sisiLaboran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SisiLaboran  $sisiLaboran
     * @return \Illuminate\Http\Response
     */
    public function destroy(SisiLaboran $sisiLaboran)
    {
        //
    }
}
