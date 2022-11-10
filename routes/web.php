<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [App\Http\Controllers\web\HomeController::class, 'home'])->name('web.home');
Route::get('/sobre', [App\Http\Controllers\web\SobreController::class, 'sobre'])->name('web.sobre');
Route::get('/cursos', [App\Http\Controllers\web\CursoController::class, 'index'])->name('web.cursos');
Route::get('/cursos/{id?}', [App\Http\Controllers\web\CursoController::class, 'curso'])->name('web.curso');
Route::get('/calendario', [App\Http\Controllers\web\CalendarioController::class, 'index'])->name('web.calendario');
Route::get('/galeria', [App\Http\Controllers\web\GaleriaController::class, 'index'])->name('web.galeria');
Route::get('/noticias', [App\Http\Controllers\web\NoticiaController::class, 'index'])->name('web.noticias');
Route::get('/noticias/{id?}', [App\Http\Controllers\web\NoticiaController::class, 'noticia'])->name('web.noticia');
Route::get('/contato', [App\Http\Controllers\web\ContatoController::class, 'contato'])->name('web.contato');

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/adm', [App\Http\Controllers\adm\IndexController::class, 'index'])->name('adm.index');
    Route::get('/adm/sobre', [App\Http\Controllers\adm\AdmSobreController::class, 'index'])->name('adm.sobre');
    Route::get('/adm/cursos', [App\Http\Controllers\adm\AdmCursosController::class, 'index'])->name('adm.cursos');
    Route::get('/adm/calendario', [App\Http\Controllers\adm\AdmCalendarioController::class, 'index'])->name('adm.calendario');
    Route::get('/adm/galeria', [App\Http\Controllers\adm\AdmGaleriaController::class, 'index'])->name('adm.galeria');
    Route::get('/adm/noticias', [App\Http\Controllers\adm\AdmNoticiasController::class, 'index'])->name('adm.noticias');
});
