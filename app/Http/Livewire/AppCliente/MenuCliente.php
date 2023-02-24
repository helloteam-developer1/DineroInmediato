<?php

namespace App\Http\Livewire\AppCliente;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MenuCliente extends Component
{
    public function render()
    {
        $notificaciones=null;
        $not = DB::table('notificaciones')->
        select(DB::raw('count(*) user_id'))->
        where('user_id', '=', Auth::user()->id)->
        where('estado','=', '0')->get();
        $not = $not[0]->user_id;
        if($not>0){
            $notificaciones = DB::table('notificaciones')->where('user_id','=',Auth::user()->id)->get();
        }
        return view('livewire.app-cliente.menu-cliente',['not'=>$not,'notificacion'=>$notificaciones]);
    }

    public function leido(){
       
    }
}
