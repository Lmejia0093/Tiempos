<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ingenieria\tiemposController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// tiempos
Route::get('tiempos',[tiemposController::class,'index'])->name('tiempoStandar');
Route::get('tiemposmostrar',[tiemposController::class,'form_ord'])->name('tiempoFormOrd');
Route::get('tiemposBuscar',[tiemposController::class,'buscar_ord'])->name('tiempoBuscar_Ord');
Route::get('VerAsignado',[tiemposController::class,'VerAsignado'])->name('VerAsignado');
//Generar PDF VerAsignado
Route::get('prueba',[tiemposController::class,'calcularCiclos'])->name('prueba');

