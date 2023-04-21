<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\CreditoFinalizado;
use App\Models\Pagos;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class clientesController extends Controller
{
    public function solicitud(){
        $consulta = User::join('solicitud_creditos','users.id','=','solicitud_creditos.user_id')->latest('solicitud_creditos.created_at')->paginate(5);
        return view('backoffices.clientes.solicitud-clientes',compact('consulta'));
    }

    public function clientes_vigentes(){
        $clientes = ClientesAceptados::join('credito','clientes_aceptados.credito_num','=','credito.num_credito')->
        join('users','clientes_aceptados.user_id','=','users.id')->paginate(5);
        
        return view('backoffices.clientes.clientes-vigentes',compact('clientes'));
    }

    public function credito_finalizado(){
        $creditofinalizado = CreditoFinalizado::all();
        return view('backoffices.clientes.credito-finalizado',compact('creditofinalizado'));
    }

    public function cartera_vencida(){
        return view('backoffices.clientes.cartera-vencida');
    }

    public function vista(){
        return view('backoffices.clientes.clientes');
    }

    public function masInformacion($user){
        $user = User::where('id','=',$user)->get();
        return view('backoffices.clientes.masInformacion',compact('user'));
    }
    public function historialPagos($user){        
        $pagos = Credito::where('user_id','=',$user)->join('pagos_credito','credito.num_credito','=','pagos_credito.num_credito')->paginate(5);
        return view('backoffices.clientes.historialPagos', ['pagos'=>$pagos]);
    }
    public function historialMontosAutorizados($user){
        $credito = Credito::where('user_id','=',$user)->where('estado','=',2)->paginate(5);
        return view('backoffices.clientes.historialMontosAutorizados',['credito'=>$credito]);
    }
    public function tablaDePagos(){
        return view('backoffices.clientes.tablaDePagos');
    }
    ///Filtro de busqueda
    public function busqueda(Request $request){
        if(empty($request->busqueda)&& empty($request->fecha_inicio)&& empty($request->fecha_termino)){
            $request->validate([
                'fecha_inicio' => 'required',
                'fecha_termino' => 'required',
                'busqueda' => 'required'
            ]);
        }else{
            if($request->busqueda!=null && $request->fecha_inicio!=null && $request->fecha_termino!=null){
                $consulta =   User::join('solicitud_creditos','users.id','=','solicitud_creditos.user_id')->
                wherebetween('fecha_nacimiento',[$request->fecha_inicio,$request->fecha_termino])->
                orwhere('nombre','=',$request->busqueda)->orwhere('trabajo','=',$request->busqueda)->
                orwhere('ingreso','=',$request->busqueda)->orwhere('nomina','=',$request->busqueda)->
                orwhere('curp','=',$request->busqueda)->orwhere('fecha_nacimiento','=',$request->busqueda)->
                orwhere('empresa_trabajo','=',$request->busqueda)->orwhere('rama_empresa','=',$request->busqueda)
                ->orwhere('telefono_contacto','=',$request->busqueda)->orwhere('email','=',$request->busqueda)->paginate(5);
                return view('backoffices.clientes.solicitud-clientes',compact('consulta'));
            }
        }

        if(!empty($request->busqueda)){
            $consulta = User::join('solicitud_creditos','users.id','=','solicitud_creditos.user_id')->
            orwhere('nombre','=',$request->busqueda)->orwhere('trabajo','=',$request->busqueda)->orwhere('ingreso','=',$request->busqueda)->orwhere('nomina','=',$request->busqueda)->orwhere('curp','=',$request->busqueda)->orwhere('fecha_nacimiento','=',$request->busqueda)->
            orwhere('empresa_trabajo','=',$request->busqueda)->orwhere('rama_empresa','=',$request->busqueda)->orwhere('telefono_contacto','=',$request->busqueda)->orwhere('email','=',$request->busqueda)
            ->paginate(3);
            return view('backoffices.clientes.solicitud-clientes',compact('consulta'));
        }
        
        if($request->fecha_inicio==null || $request->fecha_termino==null){
            $request->validate([
                'fecha_inicio' => 'required|date',
                'fecha_termino' => 'required|date'
            ]);
        }else{
            $consulta = User::join('solicitud_creditos','users.id','=','solicitud_creditos.user_id')->
            wherebetween('fecha_nacimiento',[$request->fecha_inicio,$request->fecha_termino])
            ->paginate(5);
            return view('backoffices.clientes.solicitud-clientes',compact('consulta'));
        }
        
        
    }
    ///Filtro de busqueda de clientes vigentes 
    public function busquedav(Request $request){
        
        
        if(!empty($request->busqueda)){
            $clientes = ClientesAceptados::join('credito','clientes_aceptados.credito_num','=','credito.num_credito')->
            join('users','clientes_aceptados.user_id','=','users.id')->
            wherebetween('fecha',[$request->fecha_inicio,$request->fecha_termino])
            ->orwhere('credito_num','=',$request->busqueda)
            ->orwhere('num_cliente','=',$request->busqueda)
            ->orwhere('nombre','=',$request->busqueda)
            ->orwhere('monto_aut','=',$request->busqueda)
            ->orwhere('tarjeta_reg','=',$request->busqueda)
            ->orwhere('num_pagos','=',$request->busqueda)
            ->orwhere('num_pagos_rest','=',$request->busqueda)->paginate(5);
            return view('backoffices.clientes.clientes-vigentes',compact('clientes'));
        }
        
        if(empty($request->busqueda) && empty($request->fecha_inicio)&& empty($request->fecha_termino)){
            $request->validate([
                'fecha_inicio' => 'required',
                'fecha_termino' => 'required',
                'busqueda' => 'required'
            ]);
        }else{
            if($request->busqueda!=null && $request->fecha_inicio!=null && $request->fecha_termino!=null){
                $clientes = ClientesAceptados::join('credito','clientes_aceptados.credito_num','=','credito.num_credito')->
                join('users','clientes_aceptados.user_id','=','users.id')
                ->orwhere('credito_num','=',$request->busqueda)
                ->orwhere('num_cliente','=',$request->busqueda)
                ->orwhere('nombre','=',$request->busqueda)
                ->orwhere('monto_aut','=',$request->busqueda)
                ->orwhere('tarjeta_reg','=',$request->busqueda)
                ->orwhere('num_pagos','=',$request->busqueda)
                ->orwhere('num_pagos_rest','=',$request->busqueda)->paginate(5);
                return view('backoffices.clientes.clientes-vigentes',compact('clientes'));
            }
            
        }
        
        
        if($request->fecha_inicio==null || $request->fecha_termino==null){
            $request->validate([
                'fecha_inicio' => 'required|date',
                'fecha_termino' => 'required|date'
            ]);
        }else{
            
            $clientes = ClientesAceptados::join('credito','clientes_aceptados.credito_num','=','credito.num_credito')->
            join('users','clientes_aceptados.user_id','=','users.id')->wherebetween('fecha',[$request->fecha_inicio,$request->fecha_termino])
            ->paginate(5);
            return view('backoffices.clientes.clientes-vigentes',compact('clientes'));
        }
        
    }
    
}