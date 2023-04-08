@extends('backoffices.layouts.basesinmenu')
@section('titulo','Mi pérfil')
@section('icono')
    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}">
@endsection

@section('subtitulo', 'Mi pérfil')


@section('contenido')
    <!--inicio formulario cambio contraseña-->
    <livewire:backoffice.miperfil />
    <!--inicio formulario cambio contraseña-->
@endsection
