<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmNoticias;
use App\Models\AdmNoticiasCategorias;
use Illuminate\Http\Request;

class AdmNoticiasCategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = AdmNoticiasCategorias::all();
        return view('adm.noticias-categorias.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.noticias-categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['category' => 'required']);
        AdmNoticiasCategorias::create($request->all());
        return redirect()->route('adm.noticias-categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmNoticiasCategorias  $admNoticiasCategorias
     * @return \Illuminate\Http\Response
     */
    public function show(AdmNoticiasCategorias $admNoticiasCategorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmNoticiasCategorias  $admNoticiasCategorias
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmNoticiasCategorias $noticias_categoria)
    {
        return view('adm.noticias-categorias.edit', ['noticias_categoria' => $noticias_categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmNoticiasCategorias  $admNoticiasCategorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmNoticiasCategorias $noticias_categoria)
    {
        $request->validate(['category' => 'required']);
        $noticias_categoria->update($request->all());
        return redirect()->route('adm.noticias-categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmNoticiasCategorias  $admNoticiasCategorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmNoticiasCategorias $noticias_categoria)
    {
        $noticias = AdmNoticias::where('noticias_categorias_id', $noticias_categoria->id)->get();
        if ($noticias->count()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['erro' => 'Categoria possui notícias vinculadas, necessário estar vazia para poder excluir.']);
        }
        $noticias_categoria->delete();
        return redirect()->route('adm.noticias-categorias.index');
    }
}
