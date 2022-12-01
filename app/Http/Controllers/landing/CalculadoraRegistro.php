<?php

namespace App\Http\Controllers\landing;
use Illuminate\Support\Facades\Cookie;
 


use App\Http\Controllers\Controller;
use App\Models\Calculadora;
use App\Models\User;
use Illuminate\Http\Request;

class CalculadoraRegistro extends Controller
{
    public function store(Request $request){
        $calculadora = new Calculadora();
        $calculadora->nombre = $request->nombre;
        $calculadora->trabajo = $request->trabajo;
        $calculadora->ingreso = $request->ingreso;
        $calculadora->nomina = $request->nomina;
        $calculadora->credito= $request->credito;
        $calculadora->prestamo = $request->prestamo;
        $calculadora->tiempo = $request->tiempo;
        $calculadora->save();
        $nombre = $request->nombre;
        return view('livewire.registroJCST.default', compact('nombre'));
    }
}
