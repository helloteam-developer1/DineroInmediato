<?php

use App\Http\Controllers\backoffices\clientesController;
use App\Http\Controllers\backoffices\notificacionesController;
use App\Http\Controllers\backoffices\perfilController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','isAdm'])->group(function (){
    Route::get('/original',[clientesController::class, 'vista']);
    Route::get('/clientes', [clientesController::class, 'solicitud'])->name('dashboard.backoffice');

    Route::get('/clientes-vigentes', [clientesController::class, 'clientes_vigentes'])->name('dashboard.clientesvig');
    Route::get('/credito-finalizado', [clientesController::class, 'credito_finalizado'])->name('dashboard.creditofinalizado');
    Route::get('/cartera-vencida', [clientesController::class, 'cartera_vencida'])->name('dashboard.carteraven');
    Route::get('/tablaAmortizacion/{id}', [clientesController::class, 'tablaAmortizacion'])->name('tablaAmortizacion');
    Route::get('/tablaPagos/{id}', [clientesController::class, 'tablaPagos'])->name('tablaPagos');
    Route::get('/masInformacion/{id}', [clientesController::class, 'masInformacion'])->name('masInformacion');
    Route::get('/historialPagos', [clientesController::class, 'historialPagos'])->name('historialPagos');
    Route::get('/historialMontosAutorizados', [clientesController::class, 'historialMontosAutorizados'])->name('historialMontosAutorizados');
    Route::get('/tablaDePagos', [clientesController::class, 'tablaDePagos'])->name('tablaDePagos');
    
    Route::get('/notificaciones', [notificacionesController::class, 'notificaciones'])->name('notificaciones');
    Route::post('/busqueda',[clientesController::class,'busqueda'])->name('busqueda');
    Route::get('/perfil', [perfilController::class, 'perfil'])->name('perfil');
    Route::get('/perfil/password',[perfilController::class,'password'])->name('backofficepassword');
});

