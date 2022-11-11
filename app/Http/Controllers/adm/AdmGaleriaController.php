<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmGaleria;
use App\Models\AdmGaleriaCategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmGaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(AdmGaleria $galerias)
    {
        $this->galerias = $galerias;
    }

    public function index()
    {
        $categorias = AdmGaleriaCategoria::all();
        return view('adm.galeria.index', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = AdmGaleriaCategoria::all();
        return view('adm.galeria.create', ['categorias' => $categorias]);
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
            'galerias_categorias_id' => 'required', 
            'images.*' => 'required|mimes:jpg,jpeg,png,bmp|max:2000'
        ]);

        foreach($request->file('images') as $file) {

            $imagem_urn = $file->store('img/gallery/'.$request->galerias_categorias_id, 'public');

            $this->galerias->create([
                'user_id' => $request->user_id,
                'galerias_categorias_id' => $request->galerias_categorias_id,
                'image_src' => $imagem_urn,
                'title' => $request->title,
                'desc' => $request->desc
            ]);

        }

        return redirect()->route('adm.galeria.show', $request->galerias_categorias_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galerias = AdmGaleria::where('galerias_categorias_id', $id)->orderBy('id', 'DESC')->get();
        return view('adm.galeria.show', ['galerias' => $galerias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeria = $this->galerias->find($id);
        $categorias = AdmGaleriaCategoria::all();
        return view('adm.galeria.edit', ['galeria' => $galeria, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'galerias_categorias_id' => 'required'
        ]);
        $galeria = $this->galerias->find($id);
        $galeria->update($request->all());
        return redirect()->route('adm.galeria.show', $request->galerias_categorias_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmGaleria  $admGaleria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeria = $this->galerias->find($id);

        //remove o arquivo
        Storage::disk('public')->delete($galeria->image_src);
        $galeria->delete();

        return redirect()->route('adm.galeria.show', $galeria->galerias_categorias_id);
    }
}
