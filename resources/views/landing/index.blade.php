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
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/landing/modals.css') }}">
    @endpush
    <section class="">

        <div class="grid grid-cols-2  bg-green-900 gap-0  relative " style="background: #A5D541">
            <div
              class=" divcalculadoraItems drop-shadow-lg row-span-3 bg-white grid grid-rows-6 grid-cols-1 col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 pt-24 ml-10 z-40 mr-0 sm:mr-0 md:mr-0 lg:mr-0 xl:mr-0 divCalculadora ml-0 sm:ml-0 md:ml-0 lg:ml-10 xl:ml-10 pb-10">
                @include('landing.components.content-calculadora')

            </div>

            <div
              class="drop-shadow-lg row-span-3 bg-white grid grid-rows-8 grid-cols-1 divcalculadoraItemsDos col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 pt-24 ml-10 z-40 mr-0 sm:mr-0 md:mr-0 lg:mr-0 xl:mr-0 divCalculadora ml-0 sm:ml-0 md:ml-0 lg:ml-10 xl:ml-10" style="display: none">
                @include('landing.components.content-calculadora-calculo')
            </div>

            <div class="col-start-2 col-span-2 mr-10">
                <img class=""  src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%" id="ImgIndex">
            </div>
            <div class="col-span-2">

                <div class="grid grid-cols-3 pb-4 px-4 " style=" background: #EBE7E8">

                    <div class="col-span-3 text-center mt-5 mb-5 titulosMobile">
                        <p class="texto-solicita-negro">Solicita el prestamo en <br> <strong class="text-green">sencillos pasos</strong></p>
                    </div>
                    <div class="col-span-1 grid grid-cols-1 grid-rows-2 justify-items-center">
                       <div>
                            <img class="mb-3 images" src="{{ asset('img/landing/index/Grupo 56.png') }}" width="100px">
                       </div>
                        <div>
                            <span class="texto-pequeno-gris">Registrate</span>
                       </div>
                    </div>
                    <div class="col-span-1 grid grid-cols-1 grid-rows-2 justify-items-center">
                       <div>
                            <img class="mb-3 images" src="{{ asset('img/landing/index/Grupo 55.png') }}" width="100px">
                       </div>
                        <div>
                            <span class="texto-pequeno-gris">Validaremos tu solicitud <br> de cr&eacute;dito</span>
                       </div>
                    </div>
                    <div class="col-span-1 grid grid-cols-1 grid-rows-2 justify-items-center">
                       <div>
                            <img class="mb-3 images" src="{{ asset('img/landing/index/Grupo 247.png') }}" width="100px">
                       </div>
                        <div>
                            <span class="texto-pequeno-gris">Tienes el dinero <br> muy rapido</span>
                       </div>
                    </div>
                </div>


            </div>

        </div>


    </section>

   @include('landing.components.porque-elegirnos')
   @include('landing.registro.modales.credito-rechazado')
   @include('landing.registro.modales.credito-aprobado')
   @include('landing.registro.modales.abandonar-linea')
   @push('js')
   <script src="{{ asset('js/landing/modal-register.js') }}"></script>
    <script>
        let prestamo = 1;
        let tiempo = 1;

        $(document).on('click', '#btnSig', function (e) {
            prestamo = $('#prestamo').val();
            tiempo = $('#tiempo').val();
            $('.divcalculadoraItems').hide();
            $('.divcalculadoraItemsDos').show() ;

            $('.calculadoraItems').fadeOut(1000);

           $('.calculadoraItemsDos').fadeIn(1500);
        });

      const calcular = () => {
        let ingesoMensual = $('#ingresoMensual').val();
        let creditoHimpotecario = document.getElementById('op3').checked;

        const acreditaIngresoMnesual = getIngresoMensual(ingesoMensual, 3);

        if( creditoHimpotecario && acreditaIngresoMnesual ){
            openModal('credito-aprobado');
        }
        else{
            openModal('credito-rechazado');
        }

      }

    const getIngresoMensual = (ingesoMensual, multiplicar) => {
        const ingeso_mensual_calculado = ( parseInt(ingesoMensual) * parseInt(multiplicar) );
        console.log(ingeso_mensual_calculado, prestamo);

        if( ingeso_mensual_calculado > prestamo ) {

            return true
        }

        return false;
    }
    </script>
   @endpush
@stop
