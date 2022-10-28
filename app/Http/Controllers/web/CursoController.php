<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.cursos');
    }
}
