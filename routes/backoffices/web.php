<?php

use App\Http\Controllers\backoffices\clientesController;
use App\Http\Controllers\backoffices\notificacionesController;
use App\Http\Controllers\backoffices\perfilController;
use App\Http\Controllers\backoffices\TablaAmortizacion;
use App\Http\Controllers\backoffices\TablaPagos;
use App\Models\Solicitud_Credito;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','isAdm'])->group(function (){
    Route::get('/original',[clientesController::class, 'vista']);
    Route::get('/clientes', [clientesController::class, 'solicitud'])->name('dashboard.backoffice');

    Route::get('/clientes-vigentes', [clientesController::class, 'clientes_vigentes'])->name('dashboard.clientesvig');
    Route::get('/credito-finalizado', [clientesController::class, 'credito_finalizado'])->name('dashboard.creditofinalizado');
    Route::get('/cartera-vencida', [clientesController::class, 'cartera_vencida'])->name('dashboard.carteraven');
    Route::get('/masInformacion/{id}', [clientesController::class, 'masInformacion'])->name('masInformacion');
    Route::get('/historialPagos/{id}', [clientesController::class, 'historialPagos'])->name('historialPagos');
    Route::get('/historialMontosAutorizados/{id}', [clientesController::class, 'historialMontosAutorizados'])->name('historialMontosAutorizados');
    
    Route::get('/notificaciones', [notificacionesController::class, 'notificaciones'])->name('notificaciones');
    Route::post('/busqueda',[clientesController::class,'busqueda'])->name('busqueda');
    Route::get('/perfil', [perfilController::class, 'perfil'])->name('perfil');
    Route::get('/perfil/password',[perfilController::class,'password'])->name('backofficepassword');

    Route::post('/cliente-vigentes/busqueda',[clientesController::class,'busquedav'])->name('busquedav');
    //Tabla de Amortización
    Route::get('/tablaAmortizacion/{id}', [TablaAmortizacion::class, 'tablaAmortizacion'])->name('tablaAmortizacion');
    Route::get('/tablaAmortizacion/{id}/edit',[TablaAmortizacion::class,'view'])->name('editarAmortizacion');
    Route::post('/tablaAmortizacion/{id}/update',[TablaAmortizacion::class,'update'])->name('updateAmortizacion');
    Route::post('/tablaAmortizacion/busqueda',[TablaAmortizacion::class,'busqueda'])->name('busquedaAmortizacion');
    //Tabla de Pagos
    Route::get('/tablaPagos/{id}', [TablaPagos::class, 'tablaPagos'])->name('tablaPagos');
    Route::get('/tablaDePagos', [clientesController::class, 'tablaDePagos'])->name('tablaDePagos');
    Route::post('/busqueda-tablapagos',[TablaPagos::class,'busqueda'])->name('busquedaTablaP');
    Route::get('/tabladepagos/{id}/edit',[TablaPagos::class,'editar'])->name('editarpago');
    Route::post('/tabladepagos/edit/{id}',[TablaPagos::class,'updated'])->name('tablaedit');
});

