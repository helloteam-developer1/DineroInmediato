<?php

namespace App\Http\Livewire\Backoffice;

use App\Models\Pagos;
use Livewire\Component;

class RegTablapagos extends Component
{
    public $num_credito, $n_credito;
    public $numero_pagos, $fecha_pago,$monto_pago,$saldo_insoluto;
    protected $rules = [
        'n_credito' => 'required',
        'numero_pagos' => 'required|numeric',
        'fecha_pago' => 'required|date',
        'monto_pago' => 'required|numeric',
        'saldo_insoluto' => 'required|numeric'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.backoffice.reg-tablapagos');
    }
    public function mount($num_credito){
        $this->num_credito = $num_credito;
        $this->n_credito = $num_credito;
    }

    public function registroP(){
        if($this->n_credito!=$this->num_credito){
            $this->addError('num_credito','El numero de clientes no coincide');
        }else{
            $this->validate();
            Pagos::create([
                'num_credito' => $this->num_credito,
                'numero_pagos' => $this->numero_pagos,
                'fecha_pago' => $this->fecha_pago,
                'monto_pago' => $this->monto_pago,
                'saldo_insoluto' => $this->saldo_insoluto,
                'pago_rest' => null,
                'resta_pagar' => null
            ]);
            $this->emit('registro');
        }
    }
}
