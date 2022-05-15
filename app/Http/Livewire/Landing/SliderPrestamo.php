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

    public function updatePrestamo(bool $acction)
    {
        if ( $acction ) {

            if ( $this->prestamo < 3000 ) {

                $this->prestamo++;
            }

        }else{

            if ( $this->prestamo > 0 ) {

                $this->prestamo--;
            }

            return;
        }
    }
}
