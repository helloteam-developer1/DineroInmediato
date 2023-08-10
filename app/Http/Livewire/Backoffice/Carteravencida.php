<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\CreditoVencido;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Livewire\Component;

class Carteravencida extends Component
{
    public $user, $num_credito;
    public function render()
    {
        return view('livewire.backoffice.carteravencida');
    }

    public function mount($user,$num_credito){
        $this->user = $user;
        $this->num_credito = $num_credito;
    }

    public function cartera($num){
        //Verifico que exista el numero de credito y que tenga un estado 0 (sin adeudos)
        if(Credito::where('num_credito','=',$num)->where('estado','=',0)->exists()){
            $users = User::where('id','=',$this->user)->get();
            $num_cliente = $users[0]->num_cliente;
            $email = $users[0]->email;
            $nombre = $users[0]->nombre;
            $telefono = $users[0]->telefono_contacto;     
            CreditoVencido::create([
                'num_cliente' => $num_cliente,
                'num_credito' => $num,
                'nombre' => $nombre,
                'telefono' => $telefono,
                'email' => $email, 
            ]);
            $estado = Credito::where('num_credito','=',$num)->update(['estado'=>1]);
            if($estado>0){
                $this->emit('alert');
            }
        }else{
            $this->addError('cartera','Error 505, No existe el numero de credito '.$num.' , por favor ponte en contacto con soporte tecnico');
        }
    }
}
