<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Solicitud_Credito;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Solicitud extends Component
{
    public function render()
    {
        //SELECT * FROM users, solicitud_creditos WHERE users.id = solicitud_creditos.user_id;
        //$consulta = User::all();
        $consulta = DB::table('users')->join('solicitud_creditos','users.id','=','solicitud_creditos.user_id')->simplepaginate(5);
        return view('livewire.backoffice.solicitud', compact('consulta'));
    }
}
