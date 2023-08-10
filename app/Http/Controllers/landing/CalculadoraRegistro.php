<?php

namespace App\Http\Controllers\landing;
use Illuminate\Support\Facades\Cookie;
 


use App\Http\Controllers\Controller;
use App\Models\Calculadora;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CalculadoraRegistro extends Controller
{
    public function store(Request $request){
        $calculadora = new Calculadora();
        $calculadora->nombre = $request->nombre;
        $calculadora->trabajo = $request->trabajo;
        $calculadora->ingreso = '$'.number_format($request->ingreso,2);
        $calculadora->nomina = $request->nomina;
        $calculadora->credito= $request->credito;
        $calculadora->prestamo = $request->prestamo;
        $calculadora->tiempo = $request->tiempo;
        $calculadora->save();
        $consulta = DB::select("SELECT * FROM calculadoras WHERE nombre=?",[$request->nombre]);
        $id_user = $consulta[0]->id;
        return response()->json($id_user);
        
        


    }
}
