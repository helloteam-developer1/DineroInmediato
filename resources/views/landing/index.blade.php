@extends('landing.layouts.app')
@section('content')


    <section class="row">

        <div class="col-12">
            <img src="{{ asset('img/landing/index/Grupo 246.png') }}" width="100%" height="600">
        </div>

        <div class="col-12 bg-gray mb-5">
            <div class="row">
                <div class="col-6"></div>
                <div class="col-6 row text-center">
                    <div class="col-12 my-5">
                        <p class="texto-solicita-negro">Solicita el prestamo en <span class="texto-solicita-verde">sencillos pasos</span></p>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 56.png') }}" alt="" srcset="">
                       <div>
                        <span class="texto-pequeno-gris">Registrate</span>
                       </div>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 55.png') }}" alt="" srcset="">
                        <div>
                            <span class="texto-pequeno-gris">Validaremos tu solicitud de cr&eacute;dito</span>
                        </div>
                    </div>
                    <div class="col-4">
                        <img class="mb-3" src="{{ asset('img/landing/index/Grupo 247.png') }}" alt="" srcset="">
                        <div>
                            <span class="texto-pequeno-gris">Tienes el dinero en menos de 74 horas</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="div-calcular">
            <div class="mt-5 text-center">
                <h2>¿Cu&aacute;nto <span class="text-green">dinero</span> necesitas?</h2>
            </div>

            <div class="text-left">
                <span>prestamo</span>
            </div>


            <div>
                <livewire:landing.slider-prestamo/>
            </div>

        </div>
    </section>



<script>
  $('#customRange2').click(function (e) {

    console.log($(this).val());

  });
</script>
@stop
