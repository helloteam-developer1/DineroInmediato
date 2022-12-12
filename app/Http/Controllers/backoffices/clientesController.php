<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function vista(){
        return view('backoffices.clientes.clientes');
    }

    public function tablaAmortizacion(){
        return view('backoffices.clientes.tablaAmortizacion');
    }
    public function tablaPagos(){
        return view('backoffices.clientes.tablaPagos');
    }
}
