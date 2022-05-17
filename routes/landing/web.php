<?php

use Illuminate\Support\Facades\Route;


Route::GET('/',function(){

    return view('landing.index');

})->name('home');

Route::GET('/preguntasfrec', function(){
    return view('landing.preguntas_frecuentes');
})->name('preguntasfrec');
