<?php

use App\Http\Controllers\AppCliente\AppClienteController;
use App\Http\Controllers\AppCliente\miprestamo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*Juan Carlos Segura Torres */
    Route::middleware(['auth','isUser'])->group(function (){

        Route::get('/dashboard', [AppClienteController::class, 'index'])->name('dashboard');
        /*Vista Solicitar credito junto con la petición post */
        Route::get('/solicitar-credito', [AppClienteController::class, 'solicitar'])->name('solicitar-credito');
        Route::post('/solicitar-credito', [AppClienteController::class ,'store'])->name('solicitar');
        Route::get('/miPrestamo', [AppClienteController::class, 'miprestamo'])->name('miPrestamo');
        Route::get('/ajustes-contacto', [AppClienteController::class, 'ajustescontacto'])->name('ajustes-contacto');
        Route::get('/cliente-notificaciones/{id}', [AppClienteController::class, 'notificaciones'])->name('cliente-notificaciones');
        
        Route::delete('/eliminar/{id}',[AppClienteController::class, 'destroy'])->name('notificacion.destroy');
        Route::get('/mi-perfil', [AppClienteController::class,'miperfil'])->name('miperfil');
        Route::get('cambio-password',[AppClienteController::class,'campassword'])->name('cambio-password');
        Route::get('/contacto', [AppClienteController::class, 'contacto'])->name('contacto');
    });
    
    Route::post('/logout', [AppClienteController::class, 'logout'])->name('logout')->middleware('auth');

    Route::middleware('guest')->group(function (){
        Route::get('change-password/{token}', [AppClienteController::class,'password'])->name('change-password');
        Route::post('shift-password', [AppClienteController::class,'changepassword'])->name('shift-password');
    });

