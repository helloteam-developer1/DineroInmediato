@extends('landing.layouts.app')

@section('content')

@push('css')
    <link rel="stylesheet" href="{{ asset('css/landing/modals.css') }}">
@endpush

    <button onclick="openModal('credito-rechazado')" class=' rounded text-2xl font-bold text-dark'>modal credito rechazado</button>
    <button onclick="openModal('credito-aprobado')" class=' rounded text-2xl font-bold text-dark'>modal credito aprobado</button>


@include('landing.registro.modales.credito-rechazado')
@include('landing.registro.modales.credito-aprobado')
@include('landing.registro.modales.abandonar-linea')



@push('js')
    <script src="{{ asset('js/landing/modal-register.js') }}"></script>
@endpush

@stop
