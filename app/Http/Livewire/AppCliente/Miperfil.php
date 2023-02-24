<?php

namespace App\Http\Livewire\AppCliente;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Miperfil extends Component
{
    public $valor;
    public $email;
    public $exito = '';
    public $error = '';

    public function render()
    {
        
        return view('livewire.app-cliente.miperfil');
    }

    protected $listeners = [ 'refresh' => '$refresh'];

    public function guardar(){

        if($this->email!=Auth::user()->email){
            $validatedData = $this->validate([
                'email' => 'required|regex:/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i|unique:users',
            ]
            );
            User::where('id','=',Auth::user()->id)->update(['email'=>$this->email]); 
            $this->exito = 'Cambio con Exito!';
            $this->email = '';
            $this->emitSelf('refresh');
        }else{
            $this->error = 'Tiene que se un correo diferente al actual.';
        }

    }
}
