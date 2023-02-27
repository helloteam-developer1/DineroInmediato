<?php
//helloteam.prueba4@gmail.com	helloteamunodos
namespace App\Http\Livewire\AppCliente;

use App\Models\Amortizacion;
use App\Models\Credito;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TablaAmortizacion extends Component
{
    use WithPagination;
    public $fecha_inicio;
    public $fecha_termino;
    public $busqueda;
    public $paginacion=true;
    public $total_interes_ordinario, $total_iva_io,$total_comisiones,$total_pago_m;

    public function mount(){
        $ahora = Carbon::now()->format('Y');
        
        $this->fecha_inicio= $ahora.'-01-01';
        $this->fecha_termino= $ahora.'-12-31'; 
    }

    public function updatingBusqueda(){
        $this->resetPage();
    }

    public function render(){
        $tabla = [];
        $credito = Credito::where('user_id', Auth::user()->id)->get();
        
        if($credito->count()){
            $num_credito = $credito[0]->num_credito;
            
            if(empty($this->busqueda)){
                $tabla = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->orderBy('numero_pagos', 'desc')->paginate(5);
                
            }else{

                $consulta1 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('numero_pagos','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta1->count()){
                    $tabla = $consulta1;
                }
                $consulta2 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('interes_anual','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta2->count()){
                    $tabla = $consulta2;
                }
                $consulta3 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('pag_capital','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta3->count()){
                    $tabla = $consulta3;
                }
                $consulta4 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('interes_ordinarios','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta4->count()){
                    $tabla = $consulta4;
                }
                $consulta5 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('iva_io','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta5->count()){
                    $tabla = $consulta5;
                }
                $consulta6 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('comisiones','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta6->count()){
                    $tabla = $consulta6;
                }
                $consulta7 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('pago_total_men','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->simplepaginate(3);
                if($consulta7->count()){
                    $tabla = $consulta7;
                }
            }

        }
        return view('livewire.app-cliente.tabla-amortizacion',['tabla' => $tabla]);     
    }
}
