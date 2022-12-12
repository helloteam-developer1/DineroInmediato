<?php

use App\Http\Controllers\backoffices\clientesController;
use Illuminate\Support\Facades\Route;


Route::get('/clientes', [clientesController::class, 'vista'])->name('clientes');
Route::get('/tablaAmortizacion', [clientesController::class, 'tablaAmortizacion'])->name('tablaAmortizacion');
Route::get('/tablaPagos', [clientesController::class, 'tablaPagos'])->name('tablaPagos');
