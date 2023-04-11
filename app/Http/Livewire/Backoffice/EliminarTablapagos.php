<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Pagos;
use Livewire\Component;

class EliminarTablapagos extends Component
{
    public $re;
    public function render()
    {
        return view('livewire.backoffice.eliminar-tablapagos');
    }
    public function mount($re){
        $this->re = $re;
    }

    public function eliminar($re){
        if(Pagos::where('id_pago','=',$re)->exists()){
            Pagos::where('id_pago','=',$re)->delete();
            $this->emit('eliminar');
        }else{
            $this->emit('error_p');
        }
    }
}
