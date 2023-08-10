<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Credito;
use App\Models\CreditoVencido;
use Livewire\Component;

class Regularizar extends Component
{
    public $num_credito,$registro;
    public function mount($num_credito){
        $this->num_credito = $num_credito;
    }
    public function render()
    {
        return view('livewire.backoffice.regularizar');
    }
    public function regularizar($credito){

        $estado =Credito::where('num_credito','=',$credito)->update(['estado'=>0]);
        $registro = CreditoVencido::where('num_credito','=',$credito)->delete();
        if($registro>=1 && $estado>0){
            $this->emit('alert');
        }else{
            $this->addError('regulariza','No se pudo regularizar el cliente error 500');
        }
    }
}
