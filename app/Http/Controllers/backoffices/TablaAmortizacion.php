<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\Amortizacion;
use App\Models\Credito;
use Illuminate\Http\Request;

class TablaAmortizacion extends Controller
{
    public function tablaAmortizacion($user){
        $credito  = Credito::where('user_id','=',$user)->value('num_credito');
        $tabla = Amortizacion::where('num_credito','=',$credito)->paginate(5);
        return view('backoffices.clientes.tablaAmortizacion', ['tabla'=>$tabla,'num_credito'=>$credito]);
        
    }

    
}
