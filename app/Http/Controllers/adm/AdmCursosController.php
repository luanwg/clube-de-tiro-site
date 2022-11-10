<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmCursos;
use Illuminate\Http\Request;

class AdmCursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adm.cursos');
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
     * @param  \App\Models\AdmCursos  $admCursos
     * @return \Illuminate\Http\Response
     */
    public function show(AdmCursos $admCursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmCursos  $admCursos
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmCursos $admCursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmCursos  $admCursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmCursos $admCursos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmCursos  $admCursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmCursos $admCursos)
    {
        //
    }
}
