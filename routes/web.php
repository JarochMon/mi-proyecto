<?php

use App\Http\Controllers\admin\capacitacionesController;
use App\Http\Controllers\admin\empladosController;
use App\Http\Controllers\admin\facturasController;
use Illuminate\Support\Facades\Route;

//Admin
use App\Http\Controllers\admin\dashboardController;

Route::get('/bienvenido', function () {
    return view('welcome');
});


//Dashboard
Route::controller(dashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard.index');
});

//Empleados
Route::controller(empladosController::class)->group(function () {
    Route::get('/empleados', 'index')->name('empleados.index');
});

//Facturas
Route::controller(facturasController::class)->group(function () {
    Route::get('/facturacion', 'index')->name('facturas.index');
});

//Capacitaciones
Route::controller(capacitacionesController::class)->group(function () {
    Route::get('/capacitaciones', 'index')->name('capacitaciones.index');
});


