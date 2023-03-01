<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\Credito;
use App\Models\Pagos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TablaPagos extends Component
{
    use WithPagination;
    public $busqueda;
    public $fecha_inicio;
    public $fecha_termino;
    public $year;

    public function mount(){
        //Establesco el periodo de fecha dinamico 
        $ahora = Carbon::now()->format('Y');
        $this->fecha_inicio= $ahora.'-01-01';
        $this->fecha_termino= $ahora.'-12-31'; 
    }

    public function updatingBusqueda(){
        $this->resetPage();
    }

    public function render()
    {
        $id_user = Auth::user()->id;
        $num_credito= Credito::where('user_id','=',$id_user)->value('num_credito');
        if($num_credito!=null){
            if(empty($this->busqueda)){
                $pagos = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                simplepaginate(5);
            }else{
                $consulta1 = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                where('numero_pagos','=',$this->busqueda)->
                simplepaginate(5);
                if($consulta1->count()){
                    $pagos = $consulta1;
                }
                $consulta2 = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                where('monto_pago','=',$this->busqueda)->
                simplepaginate(5);
                if($consulta2->count()){
                    $pagos = $consulta2;
                }
                $consulta3 = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                where('saldo_insoluto','=',$this->busqueda)->
                simplepaginate(5);
                if($consulta3->count()){
                    $pagos = $consulta3;
                }
                $consulta4 = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                where('pago_rest','=',$this->busqueda)->
                simplepaginate(5);
                if($consulta4->count()){
                    $pagos = $consulta4;
                }
                $consulta5 = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                where('resta_pagar','=',$this->busqueda)->
                simplepaginate(5);
                if($consulta5->count()){
                    $pagos = $consulta5;
                }
                $pagos = null;
            }
        }else{
            $pagos= null;
        }
        return view('livewire.app-cliente.tabla-pagos', ['pagos'=> $pagos,'credito'=>$num_credito]);
    }

}