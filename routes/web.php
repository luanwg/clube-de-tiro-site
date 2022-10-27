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
Route::get('/', 'App\Http\Controllers\web\SobreController@sobre')->name('web.sobre');
Route::get('/', 'App\Http\Controllers\web\CalendarioController@calendario')->name('web.calendario');
Route::get('/', 'App\Http\Controllers\web\NoticiaController@noticia')->name('web.noticia');
Route::get('/', 'App\Http\Controllers\web\ContatoController@contato')->name('web.contato');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
