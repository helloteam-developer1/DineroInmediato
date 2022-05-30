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

                @include('landing.components.content-calculadora')
                @include('landing.components.content-calculadora-calculo')


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

        </div>


    </section>

   @include('landing.components.porque-elegirnos')

   @push('js')
    <script>
        $(document).on('click', '#btnSig', function (e) {
            $('.calculadoraItems').fadeIn(300).addClass('hidden') ;

            $('.calculadoraItemsDos').removeClass('hidden') ;

        });
    </script>
   @endpush
@stop
