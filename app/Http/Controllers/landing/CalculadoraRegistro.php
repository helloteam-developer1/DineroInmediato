<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CalculadoraRegistro extends Controller
{
    public function store(Request $request){
        $usuario = new User();
        $usuario->nombre = $request->nombre;
        $usuario->trabajo = $request->trabajo;
        $usuario->ingreso = $request->ingreso;
        $usuario->tarjetaN = $request->tarjetaN;
        $usuario->creditoH = $request->creditoH;
        $usuario->prestamo = $request->prestamo;
        $usuario->tiempo_prestamo = $request->tiempo_prestamo;


    }
}
