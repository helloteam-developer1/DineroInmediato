<?php

use App\Http\Controllers\landing\ContactEmailController;
use App\Http\Controllers\landing\RegisterController;
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
Route::get('register/step', [RegisterController::class, 'steps'])->name('register.steps');

Route::get('email', function(){
    return view('landing.mail.contact.contact');
});
Route::get('test', function(){
    return view('test');
});
