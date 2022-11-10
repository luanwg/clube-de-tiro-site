<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmGaleria;
use Illuminate\Http\Request;

class AdmGaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.galeria');
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
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function show(AdmGaleria $admGaleria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmGaleria $admGaleria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmGaleria $admGaleria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmGaleria $admGaleria)
    {
        //
    }
}
