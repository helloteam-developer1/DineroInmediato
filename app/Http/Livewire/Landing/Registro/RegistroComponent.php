<?php

namespace App\Http\Livewire\Landing\Registro;

use Livewire\Component;

class RegistroComponent extends Component
{
    public $step = 1;
    public $name;

    public function render()
    {
        return view('livewire.landing.registro.registro-component');
    }

    public function stepOne()
    {
        $this->validate([
            'name' => 'required'
        ]);

        $this->step = 2;
    }


    public function previusStep()
    {
     $this->step--;
    }
}
