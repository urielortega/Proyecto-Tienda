<?php

Route::prefix('/admin')->group(function(){
    Route::get('/', ['App\Http\Controllers\Admin\DashboardController', 'getDashboard'] );
});
