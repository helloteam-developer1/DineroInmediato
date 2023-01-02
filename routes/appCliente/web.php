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

Route::get('/cliente-docu-infor', function(){
    return view('appCliente.clienteDocuInfor');
})->name('cliente-docu-infor');

Route::get('/ajustes-contacto', function(){
    return view('appCliente.clienteMenuAjustesContacto');
})->name('ajustes-contacto');

Route::get('/cliente-notificaciones', function(){
    return view('appCliente.clienteNotificaciones');
})->name('cliente-notificaciones');

Route::get('/soli-nueva', function(){
    return view('appCliente.clienteSoliNueva');
})->name('soli-nueva');

Route::get('/contacto', function(){
    return view('backoffice.contacto');

})->name('contacto');

Route::get('/clientes', function(){
    return view('backoffices.clientes.clientes');
})->name('clientes');

?>