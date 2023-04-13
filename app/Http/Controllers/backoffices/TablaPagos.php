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
        return view('backoffices.clientes.tablaPagos', ['tabla' => $tabla,'num_credito'=> $credito,'paginate'=>1]);
    }
    public function busqueda(Request $request){
        $validate = $request->validate([
            'termino' => 'required',
            'num_credito' => 'required'
        ]);
        $termino = $request->termino;
        $num_credito = $request->num_credito;
        $consulta1 = collect('');
        $consulta2 = collect('');
        $consulta3 = collect('');
        $consulta4 = collect('');
        $consulta5 = collect('');

        $consulta1 = Pagos::where('num_credito','=', $num_credito)->where('numero_pagos','=',$termino)->orderBy('numero_pagos', 'desc')->get();

        $consulta2 = Pagos::where('num_credito','=', $num_credito)->where('monto_pago','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        
        $consulta3 = Pagos::where('num_credito','=', $num_credito)->where('saldo_insoluto','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta4 = Pagos::where('num_credito','=', $num_credito)->where('pago_rest','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta5 = Pagos::where('num_credito','=', $num_credito)->where('resta_pagar','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $pagos = $consulta1->concat($consulta2)->concat($consulta3)->concat($consulta4)->concat($consulta5);
        
        $pagos2 =$pagos->unique('id_pago');
        return view('backoffices.clientes.tablaPagos', ['tabla' => $pagos2,'num_credito'=> $request->num_credito,'paginate'=>0]);

    }
    public function editar($id){
        $pagos = Pagos::where('id_pago', '=',$id)->first();
        return view('backoffices.clientes.edit-tablapagos', compact('pagos'));
    }
    public function updated(Request $request,$id){
        $validate = $request->validate([
            'n_credito' => 'required',
            'numero_pagos' => 'required|numeric',
            'fecha_pago' => 'required|date',
            'monto_pago' => 'required|numeric',
            'saldo_insoluto' => 'required|numeric'
        ]);

        Pagos::where('id_pago','=',$id)->update([
            'num_credito' => $request->n_credito,
            'numero_pagos' => $request->numero_pagos,
            'fecha_pago' => $request->fecha_pago,
            'monto_pago' => $request->monto_pago,
            'saldo_insoluto' => $request->saldo_insoluto,
            'pago_rest' => null,
            'resta_pagar' => null
        ]);
        $i = Credito::where('num_credito','=',$request->n_credito)->value('user_id');
        session()->flash('success');
        return redirect()->route('tablaPagos',$i);
    }
}
