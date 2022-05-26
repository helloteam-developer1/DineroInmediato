@extends('landing.layouts.app')
@section('content')



    <section>

        <div class="grid grid-cols-2 bg-green-900 gap-0  ">
            <div class="row-span-2">
                <div class="bg-white col-span-4 ms:col-span-4 md:col-span-4 lg:col-span-2 row-span-1 grid grid-cols-1 gap-0 pt-20 pr-5 pl-5 lg:pr-20 lg:pl-20 ml-12 mr-12 sm:mr-12 md:mr-12 lg:mr-0">
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
            </div>
            <div class="col-start-2 col-span-2">
                <img class=""  src="{{ asset('img/landing/index/Content-Figure.png') }}" width="100%">
            </div>
            <div class="bg-red-400 col-span-2">
                @include('landing.components.solicita-prestamo')
            </div>
        </div>
    </section>

