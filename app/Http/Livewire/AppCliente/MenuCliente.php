<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\Notificaciones;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MenuCliente extends Component
{
    protected $listeners = ['actualizar' => 'render'];
    public function render()
    {
        $notificaciones=null;
        //$not = DB::table('notificaciones')->select(DB::raw('count(*) user_id'))->
        //where('user_id', '=', Auth::user()->id)->where('estado','=', '0')->get();
        //$not = $not[0]->user_id;
        $not = Notificaciones::where('user_id','=',Auth::user()->id)->where('estado','=',0)->count();
        if($not>0){
            $notificaciones = DB::table('notificaciones')->where('user_id','=',Auth::user()->id)->limit(5)->get();
        }
        return view('livewire.app-cliente.menu-cliente',['not'=>$not,'notificacion'=>$notificaciones]);
    }

    public function leido(){
        $notificaciones= Notificaciones::where('user_id', '=', Auth::user()->id)->update(['estado' => 1]);
    }
}
