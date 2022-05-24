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
                    <img class=""  src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%">
                </div>
                <div style="background: #E9E7E7"  class="col-span-4 pb-5">
                    @include('landing.components.solicita-prestamo')
                </div>
            </div>

        </div>
    </section>

   @include('landing.components.porque-elegirnos')

@stop
