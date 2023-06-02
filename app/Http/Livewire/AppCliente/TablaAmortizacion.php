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
    protected $paginationTheme = 'bootstrap';

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
        $credito = Credito::where('user_id', Auth::user()->id)->where('estado','=',0)->get();
        
        if($credito->count()){
            $num_credito = $credito[0]->num_credito;
            
            if(empty($this->busqueda)){
                $tabla = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->orderBy('numero_pagos', 'desc')->paginate(5);
                
            }else{
                $consulta1 = collect('');
                $consulta2 = collect('');
                $consulta3 = collect('');
                $consulta4 = collect('');
                $consulta5 = collect('');
                $consulta6 = collect('');
                $consulta7 = collect('');

                $consulta1 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('numero_pagos','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta2 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('interes_anual','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta3 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('pag_capital','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta4 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('interes_ordinarios','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta5 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('iva_io','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta6 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('comisiones','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $consulta7 = Amortizacion::whereBetween('prox_pago',[$this->fecha_inicio,$this->fecha_termino])->
                where('num_credito','=', $num_credito)->
                where('pago_total_men','=',$this->busqueda)->orderBy('numero_pagos', 'desc')->get();
                
                $tabla = $consulta1->concat($consulta2)->concat($consulta3)->concat($consulta4)->concat($consulta5)->
                concat($consulta6)->concat($consulta7);
                $tabla1 = $tabla->unique('id_amortizacion');
                return view('livewire.app-cliente.tabla-amortizacion2',['tabla' => $tabla1]);     
            }

        }
        return view('livewire.app-cliente.tabla-amortizacion',['tabla' => $tabla]);     
    }
}
