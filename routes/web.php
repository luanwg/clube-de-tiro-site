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

Route::middleware('auth')->prefix('adm')->name('adm.')->group(function() {
    Route::get('/', [App\Http\Controllers\adm\IndexController::class, 'index'])->name('index');
    Route::get('/sobre', [App\Http\Controllers\adm\AdmSobreController::class, 'index'])->name('sobre');
    Route::put('/sobre/{id}', [App\Http\Controllers\adm\AdmSobreController::class, 'update'])->name('sobre.update');
    Route::resource('/cursos', App\Http\Controllers\adm\AdmCursosController::class);
    Route::resource('/calendario', App\Http\Controllers\adm\AdmCalendarioController::class);
    Route::resource('/calendario-evento', App\Http\Controllers\adm\AdmCalendarioEventoController::class);
    Route::resource('/galeria', App\Http\Controllers\adm\AdmGaleriaController::class);
    Route::resource('/galeria-categoria', App\Http\Controllers\adm\AdmGaleriaCategoriaController::class);
    Route::resource('/noticias', App\Http\Controllers\adm\AdmNoticiasController::class);
    Route::resource('/noticias-categorias', App\Http\Controllers\adm\AdmNoticiasCategoriasController::class);
});
