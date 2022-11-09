<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendario;
use App\Models\Noticia;
use App\Models\Galeria;

class HomeController extends Controller
{
    public function home() {
        $calendarios = Calendario::orderBy('id', 'desc')->limit(3)->get();
        $noticias = Noticia::orderBy('id', 'desc')->limit(3)->get();
        $galerias = Galeria::all()->random(5);
        return view('web.home', ['calendarios' => $calendarios, 'noticias' => $noticias, 'galerias' => $galerias]);
    }
}
