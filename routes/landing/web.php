<?php

use App\Http\Controllers\landing\CalculadoraRegistro;
use App\Http\Controllers\landing\ContactEmailController;
use App\Http\Controllers\landing\RegisterController;
use App\Http\Controllers\landing\LoginController;
use Illuminate\Support\Facades\Route;


Route::GET('/',function(){
    if ( env('APP_ENV') === 'local' ) {
        return view('landing.index');
    }else {
        return view('construccion');
    }

})->name('home');

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

Route::resource('/login', LoginController::class);

Route::get('/registro-usuarios', function(){
    return view('livewire.registroJCST.default');
})->name('registro-usuario');

Route::get('/recover1', function(){
    return view('landing.sesion.recover-step1');
})->name('recover1');
Route::get('/recover2', function(){
    return view('landing.sesion.recover-password');
})->name('recover2');
Route::get('/recover3', function(){
    return view('landing.sesion.recover-password-step2');
})->name('cambio_password');

Route::resource('/registros-calculadora', CalculadoraRegistro::class);