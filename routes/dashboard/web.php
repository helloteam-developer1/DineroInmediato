<?php
use App\Http\Controllers\landing\ContactEmailController;
use App\Http\Controllers\landing\RegisterController;
use Illuminate\Support\Facades\Route;





/*Juan Carlos Segura Torres */
Route::get('/dashboard', function(){
    return view('appCliente.index');
})->name('dashboard')->middleware('auth');
?>