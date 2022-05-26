@extends('landing.layouts.app')
@section('content')

    <style>
        .divEncima{
            position: absolute;
            bottom: 0;
            width: 100%;
            background: red
        }

        .divCalculadora{
            padding-left: 9rem; /* 144px */
            padding-right: 9rem; /* 144px */
        }



        @media screen and (max-width: 1024px) {
            #ImgIndex{
                display: none;
            }

            .divCalculadora{
                padding-left: 1.25rem; /* 20px */
                padding-right: 1.25rem; /* 20px */
            }
        }
    </style>

    <section class="">

        <div class="grid grid-cols-2  bg-green-900 gap-0  relative " style="background: #A5D541">
            <div
              class="drop-shadow-lg row-span-3 bg-white grid grid-rows-6 grid-cols-1 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 pt-24 ml-10 z-40 mr-10 sm:mr-10 md:mr-10 lg:mr-0 xl:mr-0 divCalculadora ml-10 sm:ml-10 md:ml-10 lg:ml-32 xl:ml-32">

                <div class="row-span-1 col-span-1 text-center">
                    <span class="texto-solicita-negro">¿Cu&aacute;nto <strong class="text-green">dinero</strong> necesitas?</span>
                </div>

                <div class="row-span-1 col-span-1 self-center">
                    <h3 style="font-size: 28px;"><strong class="texto-gris">Pr&eacute;stamo</strong></h3>
                </div>

                <div class="crow-span-1 ol-span-1">
                    <livewire:landing.slider-prestamo/>
                </div>

                <div class="row-span-1 col-span-1 self-center">
                    <h3 style="font-size: 28px;"><strong class="texto-gris">Tiempo de pr&eacute;stamo</strong></h3>
                </div>

                <div class="row-span-1 col-span-1">
                    <livewire:landing.slider-tiempo/>
                </div>

                <div class="row-span-1 col-span-1 text-center ">
                    <button class="btn btn-verde px-5" style="font-size: 32px"><strong>Calcular</strong></button>
                </div>

            </div>
            <div class="col-start-2 col-span-2 mr-32">
                <img class=""  src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%" id="ImgIndex">
            </div>
            <div class="col-span-2">

                <div class="grid grid-cols-3 pb-4" style=" background: #EBE7E8">

                    <div class="col-span-3 text-center mt-5 mb-5">
                        <p class="texto-solicita-negro">Solicita el prestamo en <strong class="text-green">sencillos pasos</strong></p>
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
                            <span class="texto-pequeno-gris">Validaremos tu solicitud <br> de cr&eacute;dito</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <center>

                            <img class="mb-3" src="{{ asset('img/landing/index/Grupo 247.png') }}" alt="" width="100px">
                        </center>
                        <div>
                            <span class="texto-pequeno-gris">Tienes el dinero <br> muy rapido</span>
                        </div>
                    </div>

                </div>


            </div>
            {{-- <div class="divEncima grid grid-cols-6" >
                <div class="col-start-4 col-end-7 text-center mt-5 mb-5">
                    <center>
                        <p class="texto-solicita-negro">Solicita el prestamo en <span class="texto-solicita-verde">sencillos pasos</span></p>
                    </center>
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



            </div> --}}
        </div>


    </section>

   @include('landing.components.porque-elegirnos')

@stop
