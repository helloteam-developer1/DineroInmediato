<?php

use App\Http\Controllers\backoffices\CarteraVencidaController;
use App\Http\Controllers\backoffices\clientesController;
use App\Http\Controllers\backoffices\ClientesVigentesController;
use App\Http\Controllers\backoffices\CreditoFinalizadoController;
use App\Http\Controllers\backoffices\notificacionesController;
use App\Http\Controllers\backoffices\perfilController;
use App\Http\Controllers\backoffices\TablaAmortizacion;
use App\Http\Controllers\backoffices\TablaPagos;
use App\Http\Controllers\ContactoController;
use App\Mail\Contacto\ContactoMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','isAdm'])->group(function (){
    /////Route::get('/original',[clientesController::class, 'vista']);
    /////Solicitud de clientes/////
    /*Vista Solicitud clientes y filtro de busqueda */
    Route::get('/busqueda',[clientesController::class,'busqueda'])->name('busqueda');
    //Vista Solicitud de Creditos
    Route::get('/clientes', [clientesController::class, 'solicitud'])->name('dashboard.backoffice');
    //Vista mas información de clientes vigentes
    Route::get('/masInformacion/{id}', [clientesController::class, 'masInformacion'])->name('masInformacion');
    Route::post('/historialMontosAutorizados/busqueda/',[clientesController::class,'busquedahistorialMA'])->name('busqueda.hma');
    /////Clientes Vigentes /////
    /*Vista Clientes vigentes*/    
    Route::get('/clientes-vigentes', [ClientesVigentesController::class, 'clientes_vigentes'])->name('dashboard.clientesvig');
    //Busqueda clientes vigentes 
    Route::get('/cliente-vigentes/busqueda',[ClientesVigentesController::class,'busquedav'])->name('busquedav');
    //Tabla de Amortización
    Route::get('/tablaAmortizacion/{id}', [TablaAmortizacion::class, 'tablaAmortizacion'])->name('tablaAmortizacion');
    //Busqueda FILTRO 
    Route::get('/busqueda/Amortizacion', [TablaAmortizacion::class,'busqueda'])->name('busqueda_Amortizacion');
    //Vista Editar tabla de Amortizaicón
    Route::get('/tablaAmortizacion/{id}/edit',[TablaAmortizacion::class,'view'])->name('editarAmortizacion');
    //Actualizar Tabla de amortización
    Route::post('/tablaAmortizacion/{id}/update',[TablaAmortizacion::class,'update'])->name('updateAmortizacion');
    //Vista Tabla de Pagos
    Route::get('/tablaPagos/{id}', [TablaPagos::class, 'tablaPagos'])->name('tablaPagos');
    //Filtro busqueda de tabla de pagos
    Route::post('/busqueda/tablapagos',[TablaPagos::class,'busqueda'])->name('busquedaTablaP');
    //Vista Editar tabla de pagos
    Route::get('/tabladepagos/{id}/edit',[TablaPagos::class,'editar'])->name('editarpago');
    Route::post('/tabladepagos/edit/{id}',[TablaPagos::class,'updated'])->name('tablaedit');

    /////Cartera Vencida/////
    //Vista Cartera Vencida
    Route::get('/cartera-vencida', [CarteraVencidaController::class, 'cartera_vencida'])->name('dashboard.carteraven');
    //Filtro de busqueda vista Cartera Vencida 
    Route::get('/busqueda-cartera-vencida',[CarteraVencidaController::class,'busqueda'])->name('carterab');
    //Vista Tabla de pagos 
    Route::get('/tablaDePagos/{id}', [CarteraVencidaController::class, 'tablapagos'])->name('tablaDePagos');
    Route::get('/busqueda/tablaDePagos',[CarteraVencidaController::class,'busquedatablapagos'])->name('busquedap');
    /////Credito Finalizado///
    ///Vista historial montos autorizados
    Route::get('/historialMontosAutorizados/{id}', [CreditoFinalizadoController::class, 'historialMontosAutorizados'])->name('historialMontosAutorizados');
    //Vista credito finalizado 
    Route::get('/credito-finalizado', [CreditoFinalizadoController::class, 'credito_finalizado'])->name('dashboard.creditofinalizado');
    //Filtro de busqueda con vista de credito finalizado cambiarlo
    Route::get('/busqueda/credito/finalizado',[CreditoFinalizadoController::class,'busquedacf'])->name('dashboard.busquedacf');
    //Vista de Historial de pagos
    Route::get('/historialPagos/{id}', [CreditoFinalizadoController::class, 'historialPagos'])->name('historialPagos');
    Route::post('/historialPagos/busqueda',[CreditoFinalizadoController::class, 'busquedapago'])->name('busqueda.historialP');
    //Historial montos autorizados
    Route::get('/historialMontosAutorizados/{id}', [CreditoFinalizadoController::class, 'historialMontosAutorizados'])->name('historialMontosAutorizados');
    


    Route::get('/notificaciones', [notificacionesController::class, 'notificaciones'])->name('notificaciones');
    Route::get('/perfil', [perfilController::class, 'perfil'])->name('perfil');
    Route::get('/perfil/password',[perfilController::class,'password'])->name('backofficepassword');
});

Route::post('formulario-contacto',[ContactoController::class,'store'])->name('formulario.contacto');
