<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmCalendario;
use Illuminate\Http\Request;
use App\Models\AdmCalendarioEvento;

class AdmCalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarios = AdmCalendario::all();
        return view('adm.calendario.index', ['calendarios' => $calendarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calendario_eventos = AdmCalendarioEvento::all();
        return view('adm.calendario.create', ['calendario_eventos' => $calendario_eventos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'title' => 'required',
            'starting_at' => 'required',
            'ending_at' => 'required',
            'calendario_eventos_id' => 'required'
        ]);
        AdmCalendario::create($request->all());
        return redirect()->route('adm.calendario.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmCalendario  $admCalendario
     * @return \Illuminate\Http\Response
     */
    public function show(AdmCalendario $admCalendario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmCalendario  $admCalendario
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmCalendario $calendario)
    {
        $calendario_eventos = AdmCalendarioEvento::all();
        return view('adm.calendario.edit', ['calendario' => $calendario, 'calendario_eventos' => $calendario_eventos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmCalendario  $admCalendario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmCalendario $calendario)
    {
        $calendario->update($request->all());
        return redirect()->route('adm.calendario.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmCalendario  $admCalendario
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmCalendario $calendario)
    {
        $calendario->delete();
        return redirect()->route('adm.calendario.index');
    }
}
