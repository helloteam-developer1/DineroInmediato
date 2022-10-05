<?php
use App\Http\Controllers\landing\ContactEmailController;
use App\Http\Controllers\landing\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/miperfil', function(){
    return view('backoffice.miperfil');
})->name('miperfil');

Route::get('/edit-perfil', function(){
    return view('backoffice.editperfil');
})->name('edit-my-perfil');

Route::get('/miPrestamo', function(){
    return view('appCliente.miPrestamo');
})->name('miPrestamo');
?>