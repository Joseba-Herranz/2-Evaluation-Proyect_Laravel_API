<?php

use App\Http\Controllers\CreadorDatos;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rand', function () {
    return view('randomizador');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('random', 'CreadorDatosController@generarNumero')->name('random');
// Route::get('randomizador',[CreadorDatos::class,'randomizador'])->name('randomizador');

//https://laravel.com/docs/9.x/eloquent-resources#adding-meta-data