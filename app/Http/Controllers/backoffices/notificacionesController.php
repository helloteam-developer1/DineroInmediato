<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class notificacionesController extends Controller
{
    public function notificaciones(){
        return view('backoffices.clientes.notificaciones');
    }
}
