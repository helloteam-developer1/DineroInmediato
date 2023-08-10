<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Exists;
use Livewire\Component;

class Miperfil extends Component
{
    public $name,$nombre;
    
    public $rules = ['nombre' => 'required|min:20'];

    public function render()
    {
        $this->name = Auth::user()->nombre;
        return view('livewire.backoffice.miperfil');
    }
    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cambiar(){
        $this->validate();

        if(User::where('id',Auth::user()->id)->exists()){
            User::where('id',Auth::user()->id)->update(['nombre'=>$this->nombre]);
            $this->emit('alert');
        }else{
            $this->addError('mensaje','Por favor ponte en contacto con soporte tecnico error 404 Backoffice.');
        }
        //$this->emit('alert');
    }
}
