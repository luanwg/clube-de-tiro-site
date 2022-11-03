<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'DESC')->get();
        return view('web.noticias', ['noticias' => $noticias]);
    }

    public function noticia(int $id) {
        $noticia = Noticia::find($id);
        if ($noticia) {
            return view('web.noticias', ['noticia' => $noticia]);
        } else {
            return redirect('/noticias');
        }

    }
}
