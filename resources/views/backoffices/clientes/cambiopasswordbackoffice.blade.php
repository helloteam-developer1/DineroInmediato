@extends('backoffices.layouts.basesinmenu')
@section('titulo', 'Mi pérfil')
@section('icono')
    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}">
@endsection
@section('subtitulo', 'Mi pérfil')

@section('contenido')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-8 col-lg-6 offset-1 offset-sm-2 offset-md-2 offset-lg-3">
                   <livewire:app-cliente.password />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
