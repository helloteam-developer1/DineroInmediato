@extends('landing.layouts.app')
@section('content')

    <style>
        .divEncima{
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

    <section class="shadow-md ">

        <div class="grid grid-cols-2  bg-green-900 gap-0  relative">
            <div class="row-span-3 bg-white grid grid-rows-6 grid-cols-1 px-32 pt-24 ml-32  z-40">

                <div class="row-span-1 col-span-1 text-center">
                    <h1 class="texto-solicita-negro">¿Cu&aacute;nto <span class="text-green">dinero</span> necesitas?</h1>
                </div>

                <div class="row-span-1 col-span-1">
                    <h3><strong>Pr&eacute;stamo</strong></h3>
                </div>

                <div class="crow-span-1 ol-span-1">
                    <livewire:landing.slider-prestamo/>
                </div>

                <div class="row-span-1 col-span-1">
                    <h3><strong>Tiempo de pr&eacute;stamo</strong></h3>
                </div>

                <div class="row-span-1 col-span-1">
                    <livewire:landing.slider-tiempo/>
                </div>

                <div class="row-span-1 col-span-1 text-center">
                    <button class="btn btn-verde"><strong>Calcular</strong></button>
                </div>

            </div>
            <div class="col-start-2 col-span-2 mr-32">
                <img class=""  src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%">
            </div>
            <div class="col-span-2">

                <div class="grid grid-cols-3">

                    <div class="col-span-3 text-center mt-5 mb-5">
                        <p class="texto-solicita-negro">Solicita el prestamo en <span class="texto-solicita-verde">sencillos pasos</span></p>
                    </div>
                    <div class="text-center">
                        <center>
                            <img class="mb-3" src="{{ asset('img/landing/index/Grupo 56.png') }}" alt="" width="100px">
                        </center>
                       <div>
                        <span class="texto-pequeno-gris">Registrate</span>
                       </div>
                    </div>
                    <div class="text-center">
                        <center>

                            <img class="mb-3" src="{{ asset('img/landing/index/Grupo 55.png') }}" alt="" width="100px">
                        </center>
                        <div>
                            <span class="texto-pequeno-gris">Validaremos tu solicitud de cr&eacute;dito</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <center>

                            <img class="mb-3" src="{{ asset('img/landing/index/Grupo 247.png') }}" alt="" width="100px">
                        </center>
                        <div>
                            <span class="texto-pequeno-gris">Tienes el dinero en menos de 74 horas</span>
                        </div>
                    </div>

                </div>


            </div>
            <div class="divEncima bg-red-400 grid grid-cols-6">
                <div class="col-start-4 col-end-6 text-center mt-5 mb-5">
                    <p class="texto-solicita-negro">Solicita el prestamo en <span class="texto-solicita-verde">sencillos pasos</span></p>
                </div>

                <div class="col-start-4 text-center">
                    <center>
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 56.png') }}" alt="" width="100px">
                    </center>
                   <div>
                    <span class="texto-pequeno-gris">Registrate</span>
                   </div>
                </div>
                <div class="col-start-5 text-center">
                    <center>

                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 55.png') }}" alt="" width="100px">
                    </center>
                    <div>
                        <span class="texto-pequeno-gris">Validaremos tu solicitud de cr&eacute;dito</span>
                    </div>
                </div>
                <div class="col-start-6 text-center">
                    <center>

                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 247.png') }}" alt="" width="100px">
                    </center>
                    <div>
                        <span class="texto-pequeno-gris">Tienes el dinero en menos de 74 horas</span>
                    </div>
                </div>



            </div>
        </div>


    </section>

   @include('landing.components.porque-elegirnos')

@stop
