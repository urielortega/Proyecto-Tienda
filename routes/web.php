<?php

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


// Router Autenticacion

// Route::get('/login', [ConexController::class, 'getLogin']);
Route::get('/login', ['App\Http\Controllers\ConexController', 'getLogin'] ) ->name('login');
//Route::post('/login', ['App\Http\Controllers\ConexController', 'getLogin'] ) ->name('login');
Route::get('/registro', ['App\Http\Controllers\ConexController', 'getRegistro'] ) ->name('registro');
Route::post('/registro', ['App\Http\Controllers\ConexController', 'postRegistro'] ) ->name('registro');
//Route::get('/logout', ['App\Http\Controllers\ConexController','getLogout'])-> name('logout');



//Admin

// Route::get('Mercado/crear_producto',[ProducController::class,'crear_producto']);