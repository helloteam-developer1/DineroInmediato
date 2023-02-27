<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\Notificaciones;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notificacion extends Component
{
    public $idnot=14;
    public $notificacion;
    public function mount($id){
        $this->idnot=$id;
    }

    public function render()
    {
        $this->notificacion = Notificaciones::where('user_id', Auth::user()->id)->where('id_notf','=',$this->idnot)->get();
        return view('livewire.app-cliente.notificacion');
    }
}
