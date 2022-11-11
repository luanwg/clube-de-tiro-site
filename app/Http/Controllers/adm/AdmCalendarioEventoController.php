<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmCalendarioEvento;
use App\Models\AdmCalendario;
use Illuminate\Http\Request;

class AdmCalendarioEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = AdmCalendarioEvento::all();
        return view('adm.calendario-evento.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.calendario-evento.create');
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
            'name' => 'required',
            'color' => 'required',
        ]);
        AdmCalendarioEvento::create($request->all());
        return redirect()->route('adm.calendario-evento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmCalendarioEvento  $AdmCalendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function show(AdmCalendarioEvento $AdmCalendarioEvento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmCalendarioEvento  $AdmCalendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmCalendarioEvento $calendario_evento)
    {
        return view('adm.calendario-evento.edit', ['calendario_evento' => $calendario_evento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmCalendarioEvento  $AdmCalendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmCalendarioEvento $calendario_evento)
    {
        $calendario_evento->update($request->all());
        return redirect()->route('adm.calendario-evento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmCalendarioEvento  $AdmCalendarioEvento
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmCalendarioEvento $calendario_evento)
    {
        $calendario = AdmCalendario::where('calendario_eventos_id', $calendario_evento->id)->get();
        if ($calendario->count()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['erro' => 'Categoria em uso por algum evento, necessário não estar vinculado.']);
        }
        $calendario_evento->delete();
        return redirect()->route('adm.calendario-evento.index');
    }
}
