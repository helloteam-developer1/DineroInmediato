<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\CreditoFinalizado;
use App\Models\CreditoVencido;
use App\Models\User;
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
        $nombre = User::where('id','=',$user)->value('nombre');
        
        $num_creditos = CreditoFinalizado::where('user_id','=',$user)->count();
        if($num_creditos>0){
            CreditoFinalizado::where('user_id','=',$user)->update(['num_creditos_fin' => $num_creditos+1]);
        }else{
            CreditoFinalizado::create([
                'user_id' => $consulta[0]->user_id,
                'nombre' => $nombre,
                'num_creditos_fin' => 1,
                'credito_actual' => 0
            ]);
            Credito::where('user_id','=',$user)->update(['estado' =>2]);
        }
        Credito::where('user_id','=',$user)->update(['estado' =>2]);
        ClientesAceptados::where('user_id','=',$user)->delete();
        $this->emit('alert');
    }
}
