<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\Credito;
use App\Models\Pagos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class TablaPagos extends Component
{
    use WithPagination;
    public $busqueda;
    public $fecha_inicio;
    public $fecha_termino;
    public $year;
    protected $paginationTheme = 'bootstrap';

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
        $pagos = [];
        $id_user = Auth::user()->id;
        $num_credito= Credito::where('user_id','=',$id_user)->value('num_credito');
        if($num_credito!=null){
            if(empty($this->busqueda)){
                $pagos = Pagos::where('num_credito','=', $num_credito)->
                wherebetween('fecha_pago',[$this->fecha_inicio,$this->fecha_termino])->orderBy('numero_pagos', 'desc')->
                paginate(5);
            }else{
                $consulta1 = collect('');
                $consulta2 = collect('');
                $consulta3 = collect('');
                $consulta4 = collect('');
                $consulta5 = collect('');

                $consulta1 = Pagos::where('num_credito','=', $num_credito)->wherebetween('fecha_pago',
                [$this->fecha_inicio,$this->fecha_termino])->where('numero_pagos','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta2 = Pagos::where('num_credito','=', $num_credito)->wherebetween('fecha_pago',
                [$this->fecha_inicio,$this->fecha_termino])->where('monto_pago','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                
                $consulta3 = Pagos::where('num_credito','=', $num_credito)->wherebetween('fecha_pago',
                [$this->fecha_inicio,$this->fecha_termino])->where('saldo_insoluto','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta4 = Pagos::where('num_credito','=', $num_credito)->wherebetween('fecha_pago',
                [$this->fecha_inicio,$this->fecha_termino])->where('pago_rest','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta5 = Pagos::where('num_credito','=', $num_credito)->wherebetween('fecha_pago',
                [$this->fecha_inicio,$this->fecha_termino])->where('resta_pagar','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $pagos = $consulta1->concat($consulta2)->concat($consulta3)->concat($consulta4)->concat($consulta5);
                $pagos1 = $pagos->unique('id_pago');
                return view('livewire.app-cliente.tabla-pagos2', ['pagos'=> $pagos1,'credito'=>$num_credito]);
            }
        }
        return view('livewire.app-cliente.tabla-pagos', ['pagos'=> $pagos,'credito'=>$num_credito]);
    }
  
}