<?php

use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',HomeController::class);

Route::resource('personas', PersonaController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('asistencia', AsistenciaController::class);