<?php

namespace App\Http\Livewire\Landing\Registro;

use Livewire\Component;

class RegistroComponent extends Component
{
    public $step = 1;
    public $form =[
        'name' => null,
        'curp' => null,
        'fecha_nacimiento' => null,
        'empresa_trabaja' => null,
        'antiguedad' => null,
        'rama_empresa' => null,
        'banco_nomina' => null,
        // step dos
        'telefono' => null,
        'email' => null,
        'password' => null,
        'confirm_password' => null,
        'test' => null,
    ];

    public function render()
    {
        return view('livewire.landing.registro.registro-component');
    }

    public function stepOne()
    {
        // $this->validate([
        //     'form.name' => 'required',
        //     'form.curp' => 'required',
        //     'form.fecha_nacimiento' => 'required',
        //     'form.empresa_trabaja' => 'required',
        //     'form.antiguedad' => 'required',
        //     'form.rama_empresa' => 'required',
        //     'form.banco_nomina' => 'required',
        // ]);

        $this->step = 2;
    }

    public function stepTwo()
    {
        $this->validate([
            'form.telefono' => 'required',
            'form.email' => 'required',
            'form.password' => 'required',
            'form.confirm_password' => 'required',
        ]);

        $this->step = 2;
    }


    public function previusStep()
    {
     $this->step--;
    }
}
