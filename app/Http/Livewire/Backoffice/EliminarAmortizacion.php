<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Amortizacion;
use Livewire\Component;

class EliminarAmortizacion extends Component
{
    public $re;
    public function render()
    {
        return view('livewire.backoffice.eliminar-amortizacion');
    }
    public function mount($re){
        $this->re = $re;
    }
    public function eliminar($re){
        if(Amortizacion::where('id_amortizacion','=',$re)->exists()){
            Amortizacion::where('id_amortizacion','=',$re)->delete();
            $this->emit('eliminar');
           }else{
            $this->emit('error_a');
           }
    }
}
