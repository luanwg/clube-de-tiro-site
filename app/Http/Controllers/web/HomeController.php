<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendario;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function home() {
        $calendarios = Calendario::orderBy('id', 'desc')->limit(3)->get();
        $noticias = Noticia::orderBy('id', 'desc')->limit(3)->get();
        return view('web.home', ['calendarios' => $calendarios, 'noticias' => $noticias]);
    }
}
