<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\ClientesAceptados;
use App\Models\CreditoFinalizado;
use App\Models\CreditoVencido;
use Livewire\Component;

class Finalizarcredito extends Component
{
    public $user,$consulta;
    public function render()
    {
        return view('livewire.backoffice.finalizarcredito');
    }
    public function mount($user){
        $this->user = $user;
    }
    public function finalizar($user){
        $consulta = ClientesAceptados::where('user_id', '=', $user)->get();
        CreditoFinalizado::create([
            'user_id' => $consulta[0]->user_id,
            'nombre' => $consulta[0]->nombre,
            'credito_num' => $consulta[0]->credito_num,
            'estado' => 1
        ]);
        ClientesAceptados::where('user_id','=',$user)->delete();
        $this->emit('alert');
    }
}
