<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Amortizacion;
use App\Models\Credito;
use Livewire\Component;

class EliminarAmortizacion extends Component
{
    public $re;
    public $num_credito;
    public function render()
    {
        return view('livewire.backoffice.eliminar-amortizacion');
    }
    public function mount($re){
        $this->re = $re;
    }
    public function eliminar($re){
        if(Amortizacion::where('id_amortizacion','=',$re)->exists()){
            $datos = Amortizacion::where('id_amortizacion','=',$re)->value('num_credito');
            //Elimino el registro
            Amortizacion::where('id_amortizacion','=',$re)->delete();
            ///Contamos el numero de registros en la tabla de amortización
            $contador = Amortizacion::where('num_credito','=',$datos)->count();
            //Actualizo la cantidad de datos en la tabla amortizacion
            if($contador==0){
                Credito::where('num_credito','=',$datos)->update(['num_pagos'=>null]);
            }else{
                Credito::where('num_credito','=',$datos)->update(['num_pagos'=>$contador]);
            }
            $this->emit('eliminar');
        }else{
            $this->emit('error_a');
        }
    }
}
