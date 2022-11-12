<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\AdmNoticias;
use App\Models\AdmNoticiasCategorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdmNoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = AdmNoticias::orderBy('id', 'DESC')->get();
        return view('adm.noticias.index', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = AdmNoticiasCategorias::all();
        return view('adm.noticias.create', ['categorias' => $categorias]);
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
            'title' => 'required',
            'noticias_categorias_id' => 'required', 
            'image' => 'mimes:jpg,jpeg,png,bmp|max:2000',
            'desc' => 'required',
            'text' => 'required'
        ]);

        if ($request->image) {
            $image = $request->file('image');
            $imagem_urn = $image->store('img/noticias', 'public');
        } else {
            $imagem_urn = "img/noticias/default.jpg";
        }
        

        AdmNoticias::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'image' => $imagem_urn,
            'desc' => $request->desc,
            'noticias_categorias_id' => $request->noticias_categorias_id,
            'text' => $request->text
        ]);

        return redirect()->route('adm.noticias.index');
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
    public function edit(AdmNoticias $noticia)
    {
        $categorias = AdmNoticiasCategorias::all();
        return view('adm.noticias.edit', ['noticia' => $noticia, 'categorias' => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdmNoticias  $admNoticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdmNoticias $noticia)
    {
        $request->validate([
            'title' => 'required',
            'noticias_categorias_id' => 'required', 
            'desc' => 'required',
            'text' => 'required'
        ]);
        
        if ($request->file('image')) {
            
            $request->validate([
                'image' => 'mimes:jpg,jpeg,png,bmp|max:2000'
            ]);

            //remove o arquivo antigo
            Storage::disk('public')->delete($noticia->image);

            $image = $request->file('image');
            $imagem_urn = $image->store('img/noticias', 'public');
        } else {
            $imagem_urn = $noticia->image;
        }

        $noticia->update([
            'title' => $request->title,
            'image' => $imagem_urn,
            'desc' => $request->desc,
            'noticias_categorias_id' => $request->noticias_categorias_id,
            'text' => $request->text
        ]);

        return redirect()->route('adm.noticias.index');
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
