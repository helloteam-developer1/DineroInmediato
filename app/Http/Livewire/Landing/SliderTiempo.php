<?php

namespace App\Http\Livewire\Landing;

use Livewire\Component;

class SliderTiempo extends Component
{
    public $tiempo = 1;

    public function render()
    {
        return view('livewire.landing.slider-tiempo');
    }

    public function updateTiempo(bool $acction)
    {
        if ( $acction ) {

            if ( $this->tiempo < 6 ) {

                $this->tiempo++;
            }

        }else{

            if ( $this->tiempo > 1 ) {

                $this->tiempo--;
            }

            return;
        }
    }
}
