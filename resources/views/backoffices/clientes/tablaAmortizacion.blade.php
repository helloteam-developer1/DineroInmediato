@extends('backoffices.layouts.basesinmenu')
@section('titulo', 'Tabla de Amortización')
@section('icono')
    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/CLIENTES.png') }}">
@endsection
@section('subtitulo', 'Tabla de Amortización')
@section('contenido')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-5 offset-sm-2 offset-md-4 offset-lg-7">
                        <div class="input-group">
                            <div class="input-wrapper">
                                <input type="search" name="" id="" class="ms-1 mt-2" placeholder="Buscar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" style="top: 60%;" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <button type="button" class="btn boton-color px-2  ms-5 mt-2 rounded">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin apartado de busqueda-->

    <!-- inicio tabla de elementos buscados-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                        @livewire('backoffice.reg-tabla-amortizacion', ['num_credito' =>$num_credito])
                        <div class="table-responsive text-center">
                            <table class="table table-bordered border-secondary"
                                id="tabla-amortizacion">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Núm de cred</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Núm de pago </p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Próximo pago </p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Pago a capital</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Interés ordinarios</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">IVA interés ordinario</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Comisiones</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Pago total mensual</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Editar</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Eliminar fila</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tabla as $t)
                                        <tr class="table-light">
                                            <td>{{$t->num_credito}}</td>    
                                            <td>{{$t->numero_pagos}}</td>    
                                            <td>{{$t->prox_pago}}</td>    
                                            <td>{{$t->pag_capital}}</td>    
                                            <td>{{$t->interes_ordinarios}}</td>    
                                            <td>{{$t->iva_io}}</td>    
                                            <td>{{$t->comisiones}}</td>        
                                            <td>{{$t->pago_total_men}}</td>    
                                            <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                    width="40" alt="" onclick="window.location.href=''"></td>
                                            <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                    width="30" alt=""></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin tabla de elementos buscados-->

    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-2 col-sm-8 col-md-2 col-lg-2 offset-sm-2 offset-md-6 offset-lg-8">
                    @if ($tabla->count() || $tabla!=null)
                        {{$tabla->links('backoffices.components.paginate')}}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de paginador-->

    <!--inicio de botones-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 offset-sm-1 offset-md-1 offset-lg-1">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 offset-sm-4 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                        style="background-color: #38a937; color:white; font-size: 20px;" onclick="window.location.href='/clientes-vigentes'">Volver</button>
                    </div>
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 offset-sm-4 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #f29100; color:white; font-size: 20px;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de botones-->
@endsection
    
   