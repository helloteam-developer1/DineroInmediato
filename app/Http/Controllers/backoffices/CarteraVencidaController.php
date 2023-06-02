<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\CreditoVencido;
use App\Models\Pagos;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CarteraVencidaController extends Controller
{
    //Retorna la vista cartera vencida del menu del administrador.
     public function cartera_vencida(){
        $consulta = CreditoVencido::orderby('created_at','DESC')->paginate(5);
        return view('backoffices.clientes.cartera-vencida',compact('consulta'));
    }
    //Filtro de busqueda de la vista cartera vencida;
    public function busqueda(Request $request){       
        $termino = $request->termino;
        $fecha_inicio = $request->fecha_inicio;
        $fecha_termino = $request->fecha_termino;
        if(empty($fecha_inicio) && empty($fecha_termino) && empty($termino)){
            $request->validate([
                'fecha_inicio' => 'required',
                'fecha_termino' => 'required',
                'termino' => 'required'
            ]);
        }else{
            if(!empty($fecha_inicio)||!empty($fecha_termino)){
                $date = Carbon::now()->format('Y');
                $antes = Carbon::now()->addDay(1)->format('Y-m-d');
                $request->validate([
                    'fecha_inicio' => 'required|date|after:2023-1-1|before:'.$antes,
                    'fecha_termino' => 'required|date|after:2023-1-1|before:'.$antes,
                ]);
            }
            $consulta = CreditoVencido::orwhere('num_cliente','=',$termino)->orwhere('num_credito','=',$termino)
            ->orwhere('nombre','=',$termino)->orwhere('telefono','=',$termino)->orwhere('email','=',$termino)
            ->orwherebetween('created_at',[$fecha_inicio,$fecha_termino])
            ->paginate(5);
            return view('backoffices.clientes.cartera-vencida',compact('consulta'));
        }
        
    }
    //Vista Tabla de pagos del apartado cartera vencida
    public function tablapagos($num){
        $pago =Pagos::where('num_credito','=',$num)->orderby('created_at','ASC')->paginate(1);
        return view('backoffices.clientes.tablaDePagos', ['pagos'=>$pago,'num_credito'=>$num,'termino'=>'']);
    } 
    //Filtro de busqueda de la tabla de pagos
    public function busquedatablapagos(Request $request){
        $validate = $request->validate(['termino'=> 'required','num_credito'=>'required']);
        $num_credito = $request->num_credito;        
        $termino = $request->termino;
        //reviso si tiene un - para validar la fecha 
        if(!empty(strpos($termino,"-"))){
            $consulta = Pagos::where('num_credito','=',$num_credito)->where('fecha_pago','=',$termino)
            ->orderBy('created_at','ASC')->paginate(1);
            return view('backoffices.clientes.tablaDePagos',['pagos'=>$consulta,'num_credito'=>$num_credito,'termino'=>$termino]);
        }else{
            $signo = str_replace('$','',$termino);
            $coma = str_replace(",","",$signo);
            $busqueda = (int)$coma;
            //Para la paginación 
            $porpaginacion =1;   
            $paginaActual = $request->page ?? 1;
            $offset = ($paginaActual -1)*$porpaginacion;

            $consulta1 = Pagos::where('num_credito','=',$num_credito)->where('monto_pago','=',$busqueda)->get();
            $consulta2 = Pagos::where('num_credito','=',$num_credito)->where('saldo_insoluto','=',$busqueda)->get();
            $consulta3 = Pagos::where('num_credito','=',$num_credito)->where('numero_pagos','=',$busqueda)->get();
            $consulta = $consulta1->concat($consulta2)->concat($consulta3);
            
            return view('backoffices.clientes.tablaDePagosvertical',['pagos'=>$consulta,'num_credito'=>$num_credito,'termino'=>$termino,'paginacion'=>1]);
                     
        }
    }

   
}
