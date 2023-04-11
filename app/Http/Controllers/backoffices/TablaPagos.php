<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\Credito;
use App\Models\Pagos;
use Illuminate\Http\Request;

class TablaPagos extends Controller
{
    public function tablaPagos($user){
        $credito  = Credito::where('user_id','=',$user)->value('num_credito');
        $tabla = Pagos::where('num_credito','=',$credito)->paginate(5);
        return view('backoffices.clientes.tablaPagos', ['tabla' => $tabla,'num_credito'=> $credito]);
    }
}
