<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Notificaciones;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class Notificacion extends Component
{
    public $mensaje;
    public $caracteres=0;

    public function render()
    {
        $usuarios = User::orderby('id','DESC')->pluck('id');
        return view('livewire.backoffice.notificacion',compact('usuarios'));
    }

    public function updatedMensaje(){
        $this->caracteres = strlen($this->mensaje);
    }

    public function clear(){
        $this->reset('mensaje');
        $this->reset('caracteres');
    }

    public function save(){
        $usuarios = User::orderby('id','DESC')->pluck('id');
        foreach($usuarios as $u){
            Notificaciones::create([
                'user_id' => $u,
                'titulo_notf' => 'Titulo de prueba desde el backoffice',
                'sub_notf' => 'Subtitulo de notificación desde el backoffice',
                'cuerpo' => 'cuerpo de notificación desde el backoffice',
                'fecha_envio' => Carbon::now(),
                'estado' => 0
            ]);  
            $this->emit('alert');
        }
    }
}
