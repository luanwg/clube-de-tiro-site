<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmSobre;
use Illuminate\Http\Request;

class AdmSobreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.sobre');
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
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function show(AdmSobre $admSobre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmSobre $admSobre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmSobre $admSobre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmSobre  $admSobre
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmSobre $admSobre)
    {
        //
    }
}
