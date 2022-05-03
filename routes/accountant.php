<?php

use Illuminate\Support\Facades\Route;

Route::get('/','AccountantController@index')->name('accountant.accountant');

// Route::resource('products', 'ProductController'); // ruta de recursos: grupo de rutas, se puede usar only y except para definir cuales rutas necesitas del crud

