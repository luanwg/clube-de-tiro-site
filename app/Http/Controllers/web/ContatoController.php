<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class ContatoController extends Controller
{
    public function contato() {
        Mapper::location('Clube Extremense de Tiro');
        return view('web.contato');
    }
}
