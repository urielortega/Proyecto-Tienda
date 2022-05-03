<?php

use Illuminate\Support\Facades\Route;

// Route::get('/','PanelController@index')->name('supervisor');




// Route::get('/', ['App\Http\Controllers\Admin\DashboardController', 'getDashboard'] );




Route::get('/', ['App\Http\Controllers\supervisor\DashboardController', 'getDashboard'] )->name('supervisor');
Route::get('/usuario', ['App\Http\Controllers\supervisor\UsuarioController', 'getUsuarios']);
Route::resource('categories',CategoriaController::class)->names('supervisor.categories');
Route::resource('products', 'ProductController')->names('supervisor.products'); // ruta de recursos: grupo de rutas, se puede usar only y except para definir cuales rutas necesitas del crud
// Route::resource('products', ProductController::class)->names('supervisor.products');// ruta de recursos: grupo de rutas, se puede usar only y except para definir cuales rutas necesitas del crud



// Route::get('products','ProductController@index')->name('products.index');

// Route::get('products/create', 'ProductController@create')->name('products.create');

// Route::post('products', 'ProductController@store')->name('products.store');

// Route::get('products/{product:name}', 'ProductController@show')->name('products.show');

// Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
// // Route::get('products/{product:title}/edit', 'ProductController@edit')->name('products.edit'); de esta forma busca a traves del titulo

// Route::match(['put','patch'], 'products/{product}', 'ProductController@update')->name('products.update');

// Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');