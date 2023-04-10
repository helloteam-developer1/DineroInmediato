<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\User;
use Livewire\Component;

class Carteravencida extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.backoffice.carteravencida');
    }

    public function mount($user){
        $this->user = $user;
    }

    public function cartera($user){
        if(User::where('id','=',$user)->exists()){
           if(ClientesAceptados::where('user_id','=',$user)){
            Credito::where('user_id','=',$user)->update(['estado'=>'1']);
            $this->emit('alert');
           }else{
            $this->addError('cartera','Error 404 Cliente Aceptado Inexistente, por favor ponte en contacto con soporte tecnico');
           }
        }else{
            $this->addError('cartera','Error 404 Usuario Inexistente, por favor ponte en contacto con soporte tecnico');
        }
    }
}
