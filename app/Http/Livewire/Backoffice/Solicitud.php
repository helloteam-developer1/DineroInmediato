<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Solicitud_Credito;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Solicitud extends Component
{
    use WithPagination;

    protected $listeners = ['render', 'render'];

    public function render()
    {
        //SELECT * FROM users, solicitud_creditos WHERE users.id = solicitud_creditos.user_id;
        //$consulta = User::all();
        $consulta = User::join('solicitud_creditos','users.id','=','solicitud_creditos.user_id')->paginate(3);
        return view('livewire.backoffice.solicitud', compact('consulta'));
    }
}
