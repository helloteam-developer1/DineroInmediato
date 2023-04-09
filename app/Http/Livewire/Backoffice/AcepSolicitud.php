<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\ClientesAceptados;
use App\Models\Credito;
use App\Models\Solicitud_Credito;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

use Illuminate\Support\Str;
class AcepSolicitud extends Component
{
    public $user, $monto,$confirmacion, $monto_modificado;
    public $success='';
    public function mount(User $user){
        $this->user = $user;
    }

    
    protected $rules = [
        'monto' => 'required|numeric|max:100000|min:1',
        'confirmacion' => 'required|numeric|max:100000|min:1'
    ];
    
    public function aceptar($id){

        $this->validate();
        if($this->monto == $this->confirmacion){
            $this->generarnum($id);         
        }else{
            $this->addError('igual','Los montos no son iguales.');
        }
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function generarnum($id){
        
        do{
            $num_cliente = rand(1,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        }while(User::where('num_cliente','=',$num_cliente)->exists()!=FALSE);
        
        //Hago el cambio de estado de credito asignando el numero de credito
        User::where('id','=',$id)->update(['num_cliente'=>$num_cliente]);
        //Doy de alta el credito para pasar la solicitud a clientes aceptados
        $pagos = rand(1,24);
        $fecha_inicio = Carbon::now();
        $fecha_termino = Carbon::now()->addMonth($pagos);
        do{
            $num_credito = rand(1,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        }while(Credito::where('num_credito','=',$num_credito)->exists()!=FALSE);
        Credito::create([
            'num_credito' => $num_credito,
            'user_id' => $id,
            'monto_aut' => $this->monto,
            'fecha_inicio' => null,
            'num_pagos' => null,
            'fecha_termino' => null,
            'num_pagos_rest' => null,
            'estado' => 0
        ]);
        //Alta en clientes aceptados
        $nombre = User::where('id', '=',$id)->value('nombre');
        ClientesAceptados::create([
            'user_id' => $id,
            'credito_num' => $num_credito,
            'nombre' => $nombre,
        ]);

        Solicitud_Credito::where('user_id','=',$id)->delete();
        $this->emit('alert');
        $this->reset(['monto','confirmacion']);
        
    }
    public function render()
    {
        return view('livewire.backoffice.acep-solicitud');
    }
}
