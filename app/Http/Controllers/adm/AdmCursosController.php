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
     *
     */

    public function __construct(AdmCursos $cursos)
    {
        $this->cursos = $cursos;
    }


    public function index()
    {
        $cursos = $this->cursos->all();
        return view('adm.cursos.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        AdmCursos::create($request->all());
        return redirect()->route('adm.cursos.index');
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
    public function edit(AdmCursos $curso)
    {
        return view('adm.cursos.edit', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmCursos  $admCursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmCursos $curso)
    {
        $curso->update($request->all());
        return redirect()->route('adm.cursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmCursos  $admCursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmCursos $curso)
    {
        $curso->delete();
        return redirect()->route('adm.cursos.index');
    }
}
