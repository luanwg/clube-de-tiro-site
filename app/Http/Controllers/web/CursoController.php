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
        $cursos = Curso::all();
        return view('web.cursos', ['cursos' => $cursos]);
    }

    public function curso(int $id) {
        $curso = Curso::find($id);
        if ($curso) {
            return view('web.cursos', ['curso' => $curso]);
        } else {
            return redirect('/cursos');
        }

    }
}
