<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function sobre() {
        return view('web.sobre');
    }
}
