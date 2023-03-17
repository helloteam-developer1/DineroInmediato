<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\Notificaciones;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Notificacion extends Component
{
    public $idnot;
    public $notificacion;
    public function mount($id){
        $this->idnot=$id;
    }

    public function render()
    {
        $this->notificacion = Notificaciones::where('user_id', Auth::user()->id)->where('id_notf','=',$this->idnot)->get();
        Notificaciones::where('user_id', '=', Auth::user()->id)->update(['estado' => 1]);
        return view('livewire.app-cliente.notificacion');
    }
}
