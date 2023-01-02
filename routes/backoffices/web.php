<?php

use App\Http\Controllers\backoffices\clientesController;
use Illuminate\Support\Facades\Route;


Route::get('/clientes', [clientesController::class, 'vista'])->name('clientes');
Route::get('/tablaAmortizacion', [clientesController::class, 'tablaAmortizacion'])->name('tablaAmortizacion');
Route::get('/tablaPagos', [clientesController::class, 'tablaPagos'])->name('tablaPagos');
Route::get('/masInformacion', [clientesController::class, 'masInformacion'])->name('masInformacion');
Route::get('/historialPagos', [clientesController::class, 'historialPagos'])->name('historialPagos');
Route::get('/historialMontosAutorizados', [clientesController::class, 'historialMontosAutorizados'])->name('historialMontosAutorizados');

