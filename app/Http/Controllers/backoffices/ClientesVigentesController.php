<?php

namespace App\Http\Controllers\backoffices;

use App\Http\Controllers\Controller;
use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientesVigentesController extends Controller
{
    //Vista 
    public function clientes_vigentes()
    {
        $clientes = ClientesAceptados::join('credito', 'clientes_aceptados.credito_num', '=', 'credito.num_credito')->join('users', 'clientes_aceptados.user_id', '=', 'users.id')->orderby('fecha')->paginate(5);

        return view('backoffices.clientes.clientes-vigentes', ['clientes'=>$clientes,'busqueda'=>'','fecha_inicio'=>'','fecha_termino'=>'']);
    }
    ///Filtro de busqueda de clientes vigentes 
    public function busquedav(Request $request)
    {
        
        if (!empty($request->fecha_inicio) || !empty($request->fecha_termino)){
            $date = Carbon::now()->format('Y');
            $antes = Carbon::now()->addDay(1)->format('Y-m-d');
            $request->validate([
                'fecha_inicio' => 'required|date|after:2023-1-1|before:'.$antes,
                'fecha_termino' => 'required|date|before:'.$antes,
            ]);
            $clientes = ClientesAceptados::join('credito', 'clientes_aceptados.credito_num', '=', 'credito.num_credito')
            ->join('users', 'clientes_aceptados.user_id', '=', 'users.id')->wherebetween('fecha', [$request->fecha_inicio, $request->fecha_termino])
            ->paginate(5);
            return view('backoffices.clientes.clientes-vigentes',
            ['clientes'=>$clientes,'busqueda'=>$request->busqueda,'fecha_inicio'=>$request->fecha_inicio,'fecha_termino'=>$request->fecha_termino]);
        
        }
        if(!empty($request->busqueda)){
            $clientes = ClientesAceptados::join('credito', 'clientes_aceptados.credito_num', '=', 'credito.num_credito')
            ->join('users', 'clientes_aceptados.user_id', '=', 'users.id')
            ->orwhere('num_pagos_rest', 'LIKE', '%'.$request->busqueda. '%')
            ->orwhere('credito_num', 'LIKE','%'. $request->busqueda. '%')
            ->orwhere('num_cliente', 'LIKE', '%'.$request->busqueda. '%')
            ->orwhere('nombre', 'LIKE','%'. $request->busqueda. '%')
            ->orwhere('tarjeta_reg', 'LIKE', '%'.$request->busqueda. '%')
            ->orwhere('num_pagos', 'LIKE','%'. $request->busqueda. '%')
            ->orwhere('monto_aut', 'LIKE','%'. $request->busqueda. '%')
            ->paginate(5);
            return view('backoffices.clientes.clientes-vigentes',
            ['clientes'=>$clientes,'busqueda'=>$request->busqueda,'fecha_inicio'=>$request->fecha_inicio,'fecha_termino'=>$request->fecha_termino]);
        }
        $request->validate([
            'busqueda' => 'required',
            'fecha_inicio' => 'required',
            'fecha_termino' => 'required'
        ]);
    }

}
