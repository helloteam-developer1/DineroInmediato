<?php

namespace App\Http\Livewire\Landing;

use Livewire\Component;

class SliderPrestamo extends Component
{
    public $prestamo = 0;

    public function render()
    {
        return view('livewire.landing.slider-prestamo');
    }
}
