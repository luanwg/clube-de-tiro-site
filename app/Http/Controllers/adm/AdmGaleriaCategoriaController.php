<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmGaleria;
use App\Models\AdmGaleriaCategoria;
use Illuminate\Http\Request;

class AdmGaleriaCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias = AdmGaleriaCategoria::all();
        return view('adm.galeria-categoria.index', ['galerias' => $galerias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm.galeria-categoria.create');
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
            'category' => 'required'
        ]);

        AdmGaleriaCategoria::create($request->all());
        return redirect()->route('adm.galeria-categoria.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmGaleriaCategoria  $admGaleriaCategoria
     * @return \Illuminate\Http\Response
     */
    public function show(AdmGaleriaCategoria $admGaleriaCategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmGaleriaCategoria  $admGaleriaCategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmGaleriaCategoria $galeria_categorium)
    {
        return view('adm.galeria-categoria.edit', ['galeria_categorium' => $galeria_categorium]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmGaleriaCategoria  $admGaleriaCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmGaleriaCategoria $galeria_categorium)
    {
        $request->validate([
            'category' => 'required'
        ]);

        $galeria_categorium->update($request->all());
        return redirect()->route('adm.galeria-categoria.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmGaleriaCategoria  $admGaleriaCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdmGaleriaCategoria $galeria_categorium)
    {
        $galeria = AdmGaleria::where('galerias_categorias_id', $galeria_categorium->id)->get();
        if ($galeria->count()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['erro' => 'Categoria possui fotos vinculadas, necessário estar vazia para poder excluir.']);
        }
        $galeria_categorium->delete();
        return redirect()->route('adm.galeria-categoria.index');
    }
}
