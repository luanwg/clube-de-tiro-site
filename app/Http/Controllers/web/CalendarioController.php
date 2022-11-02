<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Calendario;
use App\Models\CalendarioEvento;
use Illuminate\Http\Request;

class CalendarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendarios = Calendario::all();
        $calendarioeventos = CalendarioEvento::all();
        return view('web.calendario', ['calendarios' => $calendarios, 'calendarioeventos' => $calendarioeventos]);
    }
}
