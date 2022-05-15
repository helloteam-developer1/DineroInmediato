<?php

namespace App\View\Components\landing\modal;

use Illuminate\View\Component;

class modal extends Component
{
    public $titulo;
    public $contenido;
    public $idm;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($titulo, $idm)
    {
        $this->idm = $idm;

        $this->getContentModal($titulo);

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {

        return view('components.landing.modal.modal-landing');
    }


    public function getContentModal($titulo)
    {
        if ($titulo === 'terminos-condiciones'){

            $this->titulo = 'terminos y condiciones 20';
            $this->contenido = 'contenido 1';
        }

        // MODAL QUIEENES SOMOS

        if ($titulo === 'quienes-somos'){

            $this->titulo = '¿Quiénes somos?';
            $this->contenido = 'contenido 2';
        }

        // MODAL ACERCA DE NOSOTROS

        if ($titulo === 'acerca-nosotros'){

            $this->titulo = 'Acerca de nosotros';
            $this->contenido = 'contenido 3';
        }

        // MODAL POLITICA DE PRIVACIDAD
        if ($titulo === 'politica-privacidad'){

            $this->titulo = 'Politica y aviso de privacidad';
            $this->contenido = 'contenido 4';

        }
    }
}
