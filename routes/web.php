<?php

use Illuminate\Support\Facades\Route;

//Admin
use App\Http\Controllers\admin\dashboardController;

Route::get('/bienvenido', function () {
    return view('welcome');
});


//Dashboard
    Route::controller(dashboardController::class)->group(function(){
        Route::get('/dashboard', 'index');
    });
