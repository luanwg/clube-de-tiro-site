<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmNoticias;
use Illuminate\Http\Request;

class AdmNoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.noticias');
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
     * @param  \App\Models\AdmNoticias  $admNoticias
     * @return \Illuminate\Http\Response
     */
    public function show(AdmNoticias $admNoticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmNoticias  $admNoticias
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmNoticias $admNoticias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmNoticias  $admNoticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmNoticias $admNoticias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmNoticias  $admNoticias
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmNoticias $admNoticias)
    {
        //
    }
}
