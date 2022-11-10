<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sobre;

class SobreController extends Controller
{
    public function sobre() {
        $sobre = Sobre::all();
        return view('web.sobre', ['sobre' => $sobre]);
    }
}
