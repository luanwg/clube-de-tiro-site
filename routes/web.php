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
Route::get('/', 'App\Http\Controllers\web\HomeController@home')->name('web.home');
Route::get('/sobre', 'App\Http\Controllers\web\SobreController@sobre')->name('web.sobre');
Route::get('/calendario', 'App\Http\Controllers\web\CalendarioController@index')->name('web.calendario');
Route::get('/galeria', 'App\Http\Controllers\web\GaleriaController@index')->name('web.galeria');
Route::get('/noticias', 'App\Http\Controllers\web\NoticiaController@index')->name('web.noticia');
Route::get('/contato', 'App\Http\Controllers\web\ContatoController@contato')->name('web.contato');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
