<?php 

use App\Http\Controllers\backoffices\clientesController;
use Illuminate\Support\Facades\Route;


Route::get('/clientes', [clientesController::class, 'vista'])->name('clientes');