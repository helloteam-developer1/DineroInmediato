@extends('landing.layouts.app')
@section('eligenos')
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
@stop
