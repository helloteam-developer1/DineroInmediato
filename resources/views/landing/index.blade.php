@extends('landing.layouts.app')
@section('content')

    <style>
    @media screen and (max-width: 1024px) {
        #ImgIndex{
            display: none;
        }
    }
    </style>
    <section class="shadow-md">
        {{-- div principal --}}
        <div class="grid grid-cols-4 grid-rows-1 gap-0">
            {{-- div calculadora --}}
            <div class="col-span-4 grid grid-cols-4 grid-rows-1 gap-0" style="background: #A5D541">

                <div class="bg-white col-span-4 ms:col-span-4 md:col-span-4 lg:col-span-2 row-span-2 grid grid-cols-1 gap-0 pt-20 pr-5 pl-5 lg:pr-20 lg:pl-20 ml-12 mr-12 sm:mr-12 md:mr-12 lg:mr-0">
                    <div class="col-span-1 text-center">
                        <h1 class="texto-solicita-negro">¿Cu&aacute;nto <span class="text-green">dinero</span> necesitas?</h1>
                    </div>

                    <div class="col-span-1">
                        <h3><strong>Pr&eacute;stamo</strong></h3>
                    </div>

                    <div class="col-span-1">
                        <livewire:landing.slider-prestamo/>
                    </div>

                    <div class="col-span-1">
                        <h3><strong>Tiempo de pr&eacute;stamo</strong></h3>
                    </div>

                    <div class="col-span-1">
                        <livewire:landing.slider-tiempo/>
                    </div>

                    <div class="col-span-1 text-center">
                        <button class="btn btn-verde"><strong>Calcular</strong></button>
                    </div>

                </div>

                <div class="bg-blue-300 col-span-2 mr-10" id="ImgIndex">
                    <img class=""  src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%"">
                </div>
                <div style="background: #E9E7E7"  class="col-span-4 pb-5">
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
            </div>

        </div>
    </section>

    <section class="container my-5">
        <div class="grid gap-3 grid-cols-4 justify-items-center">
            <div class="col-span-4 mb-5">
                <h2 class="titulo text-2xl" >¿Por qué elegirnos?</h2>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span:1">
                <center>
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 12.png') }}">
                </center>
                <p class="eligenos">Tu préstamo inmediato sin salir de casa</p>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span:1">
                <center>
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 11.png') }}">
                </center>
                <p class="eligenos">Préstamo confiable</p>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span:1">
                <center>
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 10.png') }}">
                </center>
                <p class="eligenos">Plazo de 1 a 6 meses </p>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-1 lg:col-span:1">
                <center>
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 9.png') }}">
                </center>
                <p class="eligenos">Opciones de pago</p>
            </div>
        </div>
    </section>
    {{-- <section >
        <div class="container pb-5 text-center">
            <br>

            <div class="row text-center">
                <div>
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 12.png') }}">
                    <p class="eligenos">Tu préstamo inmediato sin salir de casa</p>
                </div>
                <div class="col-xs-12 col-md-3 mt-5">
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 11.png') }}">
                    <p class="eligenos">Préstamo confiable</p>
                </div>
                <div class="col-xs-12 col-md-3 mt-5">
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 10.png') }}">
                    <p class="eligenos">Plazo de 1 a 6 meses </p>
                </div>
                <div class="col-xs-12 col-md-3 mt-5">
                    <img src="{{ asset('img/landing/index/Enmascarar grupo 9.png') }}">
                    <p class="eligenos">Opciones de pago</p>
                </div>
            </div>
        </div>
    </section> --}}


<script>
  $('#customRange2').click(function (e) {

    console.log($(this).val());

  });
</script>
@stop
