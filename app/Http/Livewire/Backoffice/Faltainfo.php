<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Solicitud_Credito;
use App\Models\User;
use Livewire\Component;

class Faltainfo extends Component
{
    public $user,$contador=0,$mensaje,$otro;
    public $opcion1, $opcion2;
    public function mount(User $user){
        $this->user = $user;
    }
    protected $rules = [
        'mensaje' => 'max:300'
    ];
    public function render()
    {
        return view('livewire.backoffice.faltainfo');
    }

    public function updatedMensaje(){
        $this->contador = strlen($this->mensaje);
    }

    public function docincomp($id){
       
       $this->validate();
       
       if(!empty($this->opcion1)|| !empty($this->opcion2) || !empty($this->otro)){
            if($this->opcion1==1){
                Solicitud_Credito::where('user_id','=',$id)->update([
                    'estado' => 1,
                    'mensaje' => 'Documento Inválido o información incorrecta, favor de volver a subir.'.$this->mensaje,
                    'documentacion' => '2'
                ]);
                $this->emit('alert');
            }
            if($this->opcion2==1){
                Solicitud_Credito::where('user_id','=',$id)->update([
                    'estado' => 1,
                    'mensaje' =>'Documento incompleta: falta documentación por subir.'. $this->mensaje,
                    'documentacion' =>'3'
                ]);    
                $this->emit('alert');
            }
            if($this->otro==1){
                Solicitud_Credito::where('user_id','=',$id)->update([
                    'estado' => 1,
                    'mensaje' =>$this->mensaje,
                    'documentacion'=> '2'
                ]); 
                $this->emit('alert');
            }
               
        }else{
            $this->addError('opciones','Para continuar selecciona una de las opciones.');
        }
    }


}
