@extends('landing.layouts.app')
@section('content')


    <section class="row g-0 px-5">
        <div class="">

        </div>
        <div class="col-md-6 div-calcular">
            <div class="div-calcular">
                <div class="container" style="padding: 0 150px 0 150px">

                    <div class="mt-5 text-center mb-5">
                        <h1>¿Cu&aacute;nto <span class="text-green">dinero</span> necesitas?</h1>
                    </div>

                    <div class="text-left mt-5">
                        <h3><strong>Pr&eacute;stamo</strong></h3>
                    </div>

                    <div>
                        <livewire:landing.slider-prestamo/>
                    </div>

                    <div class="text-left mt-5">
                        <h3><strong>Tiempo de pr&eacute;stamo</strong></h3>
                    </div>

                    <div class="mb-5">
                        <livewire:landing.slider-tiempo/>
                    </div>

                    <div class="col-12 mt-5 mb-5 text-center">
                        <button class="btn btn-verde"><strong>Calcular</strong></button>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%">
        </div>

        <div class="col-12 bg-gray mb-5">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 row text-center">
                    <div class="col-12 my-5">
                        <p class="texto-solicita-negro">Solicita el prestamo en <span class="texto-solicita-verde">sencillos pasos</span></p>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 56.png') }}" alt="" width="100px">
                       <div>
                        <span class="texto-pequeno-gris">Registrate</span>
                       </div>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 55.png') }}" alt="" width="100px">
                        <div>
                            <span class="texto-pequeno-gris">Validaremos tu solicitud de cr&eacute;dito</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 247.png') }}" alt="" width="100px">
                        <div>
                            <span class="texto-pequeno-gris">Tienes el dinero en menos de 74 horas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section style="background-color: #FFFF">
        <div class="container pb-5 text-center">
            <br>
            <h2 class="titulo">¿Por qué elegirnos?</h2>
            <div class="row text-center">
                <div class="col-xs-12 col-md-3 mt-5">
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
    </section>


<script>
  $('#customRange2').click(function (e) {

    console.log($(this).val());

  });
</script>
@stop
