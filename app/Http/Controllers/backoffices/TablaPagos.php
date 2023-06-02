<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\Credito;
use App\Models\Pagos;
use Illuminate\Http\Request;

class TablaPagos extends Controller
{
    public function tablaPagos($credito){
        
        $tabla = Pagos::where('num_credito','=',$credito)->paginate(5);
        return view('backoffices.clientes.tablaPagos', ['tabla' => $tabla,'num_credito'=> $credito,'paginate'=>1]);
    }
    public function busqueda(Request $request){
        $validate = $request->validate([
            'termino' => 'required',
            'num_credito' => 'required'
        ]);
        $termino = str_replace(",","",$request->termino);
        $num_credito = $request->num_credito;

        $consulta1 = Pagos::where('num_credito','=', $num_credito)->where('numero_pagos','=',$termino)->orderBy('numero_pagos', 'desc')->get();

        $consulta2 = Pagos::where('num_credito','=', $num_credito)->where('monto_pago','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta6 = Pagos::where('num_credito','=',$num_credito)->where('fecha_pago','=',$termino)->orderBy('numero_pagos','desc')->get();
        
        $consulta3 = Pagos::where('num_credito','=', $num_credito)->where('saldo_insoluto','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta4 = Pagos::where('num_credito','=', $num_credito)->where('pago_rest','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $consulta5 = Pagos::where('num_credito','=', $num_credito)->where('resta_pagar','=',$termino)->orderBy('numero_pagos', 'desc')->get();
        
        $pagos = $consulta1->concat($consulta2)->concat($consulta3)->concat($consulta4)->concat($consulta5)->concat($consulta6);
        
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
            'numero_pagos' => 'required',
            'fecha_pago' => 'required|date',
            'monto_pago' => 'required',
            'saldo_insoluto' => 'required'
        ]);
        $numero_pagos = str_replace(",","",$request->numero_pagos);
        $monto_pago = str_replace(",","",$request->monto_pago);
        $saldo_insoluto = str_replace(",","",$request->saldo_insoluto);
        Pagos::where('id_pago','=',$id)->update([
            'num_credito' => $request->n_credito,
            'numero_pagos' => $numero_pagos,
            'fecha_pago' => $request->fecha_pago,
            'monto_pago' => $monto_pago,
            'saldo_insoluto' => $saldo_insoluto,
            'pago_rest' => null,
            'resta_pagar' => null
        ]);
        
        session()->flash('success');
        return redirect()->route('tablaPagos',$request->n_credito);
    }
}
