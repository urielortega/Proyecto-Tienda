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

// Route::get('/', ['App\Http\Controllers\HomeController', 'getHome'] ) ->name('main');
Route::get('/', 'MainController@index')->name('main');
//Route::get('/', 'MainController@index')->name('main');

// Router Autenticacion
Auth::routes();  
// Route::get('/login', [ConexController::class, 'getLogin']);
//Route::get('/login', ['App\Http\Controllers\ConexController', 'getLogin'] ) ->name('login');
//Route::post('/login', ['App\Http\Controllers\ConexController', 'getLogin'] ) ->name('login');
// Route::get('/registro', ['App\Http\Controllers\ConexController', 'getRegistro'] ) ->name('registro');
// Route::post('/registro', ['App\Http\Controllers\ConexController', 'postRegistro'] ) ->name('registro');
//Route::get('/logout', ['App\Http\Controllers\ConexController','getLogout'])-> name('logout');



//Admin

// Route::get('Mercado/crear_producto',[ProducController::class,'crear_producto']);


//Producto

// Route::get('/products','ProductController@index')->name('products.index');

// Route::get('products/create', 'ProductController@create')->name('products.create');

// Route::post('products', 'ProductController@store')->name('products.store');

// Route::get('products/{product}', 'ProductController@show')->name('products.show');

// Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
// // Route::get('products/{product:title}/edit', 'ProductController@edit')->name('products.edit'); de esta forma busca a traves del titulo

// Route::match(['put','patch'], 'products/{product}', 'ProductController@update')->name('products.update');

// Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');