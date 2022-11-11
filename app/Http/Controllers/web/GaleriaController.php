<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeria;
use App\Models\GaleriaCategoria;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerias = Galeria::orderBy('id', 'DESC')->get();
        $galerias_categorias = GaleriaCategoria::all();
        return view('web.galeria', ['galerias' => $galerias, 'galerias_categorias' => $galerias_categorias]);
    }
}
