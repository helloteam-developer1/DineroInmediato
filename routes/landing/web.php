<?php

use App\Http\Controllers\landing\CalculadoraRegistro;
use App\Http\Controllers\landing\ContactEmailController;
use App\Http\Controllers\landing\RegisterController;
use App\Http\Controllers\landing\LoginController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Livewire\Wizard;


use Illuminate\Support\Facades\Route;


Route::GET('/preguntasfrec', function(){
    return view('landing.preguntas_frecuentes');
})->name('preguntasfrec');


Route::post('sendEmail', [ContactEmailController::class, 'send']);


Route::get('register', [RegisterController::class, 'bienvenida'])->name('register');


Route::get('test', function(){
    return view('test');
});

Route::get('/modal', function(){
    return view('landing/sesion/modal/_modal2');
});

/*Juan Carlos Segura Torres*/

Route::resource('/registros-calculadora', CalculadoraRegistro::class);

Route::middleware('guest')->group(function () {
    Route::GET('/',function(){
        if ( env('APP_ENV') === 'local' ) {
            return view('landing.index');
        }else {
            return view('construccion');
        }
    
    })->name('home');
    
    Route::get('/recover1', function(){
        return view('landing.sesion.recover-step1');
    })->name('recover1');
    Route::get('/recover2', function(){
        return view('landing.sesion.recover-password');
    })->name('recover2');
    /*Cerrar sesión */
    
    Route::get('/registro-usuarios/{id}', [Wizard::class, 'index'])->name('registro-usuario');
    /*Route::get('/registro-usuarios/{id}', [Wizard::class, 'render'])->name('registro-usuario');*/
    Route::get('/login',[LoginController::class, 'index'])->name('login');
    Route::post('/loggeo', [LoginController::class, 'store'])->name('login.store');
    Route::post('/login', [LoginController::class, 'recover'])->name('login.recover');
    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');
    Route::get('resetpassword', function(){
        return view('landing.sesion.recover-password-step2');
    })->name('cambio_password');
    
});
