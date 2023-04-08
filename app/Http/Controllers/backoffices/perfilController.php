<?php
namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function perfil(){
        return view('backoffices.clientes.perfil');
    }
    public function password(){
        return view('backoffices.clientes.cambiopasswordbackoffice');
    }
}
