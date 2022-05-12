<?php

use Illuminate\Support\Facades\Route;


Route::GET('/',function(){

    return view('landing.index');

})->name('home');
