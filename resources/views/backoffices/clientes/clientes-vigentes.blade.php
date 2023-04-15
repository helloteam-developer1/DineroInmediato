@extends('backoffices.layouts.base')
    @section('titulo', 'Clientes Vigentes')
    @section('contenido')
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-8 col-sm-10 col-md-10 col-lg-8 offset-2 offset-sm-1 offset-md-2 offset-lg-2">
                        <!--Filtro de busqueda -->
                        <form action="{{route('busquedav')}}" method="POST">
                            @csrf
                                @error('fecha_inicio')
                                    <span style="color:red;">{{$message}}</span>
                                    <br />
                                @enderror
                                @error('fecha_termino')
                                    <span style="color:red;">{{$message}}</span>
                                    <br />
                                @enderror
                                @error('busqueda')
                                    <span style="color:red;">{{$message}}</span>
                                    <br />
                                @enderror
                                
                                <div class="input-group">
                                    <p class="my-2 mx-2">De</p> <input type="date" class="mx-3" placeholder="" name="fecha_inicio" id="fecha_inicio"> <img
                                    src="{{ asset('img/backoffices/CALENDARIO.PNG') }}"class="my-2 mx-2" width="30"
                                    height="30" alt="">
                                <p class="mx-3 my-2">a</p> <input type="date" class="mx-3" placeholder="" name="fecha_termino" id="fecha_termino"><img
                                src="{{ asset('img/backoffices/CALENDARIO.PNG') }}" class="my-2 mx-2" width="30"
                                    height="30" alt="">
                                <div class="input-wrapper">
                                    <input type="search" name="busqueda" id="" class="ms-1"
                                        placeholder="Buscar" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <button type="submit" class="btn boton-color px-2 ms-4 rounded">Buscar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Tabla de Datos Clientes Vigentes--}}
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                            <div class="table-responsive text-center">
                                <!--inicio tabla de clientes--->
                                <table class="table table-striped table-bordered border-secondary" >
                                    <thead>
                                        <tr class="table-secondary">
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Número de Crédito</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Número de Cliente</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-pequeño">Nombre</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">linea de Crédito Aut</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Tarjeta de Nóm Reg</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Tabla de Amortización</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Núm Parcilidades</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Tabla de Pago</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Número de Pagos Rest</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla">Enviar Cartera Vencida</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Más Información</p>
                                            </th>
                                            <th scope="col" class="px-5">
                                                <p class="encabezado-tabla-medio">Finalizar Crédito</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        @foreach ($clientes as $c)
                                            <tr class="table-light">
                                                <td>{{$c->credito_num}}</td>
                                                <td>{{$c->num_cliente}}</td>
                                                <td>{{$c->nombre}}</td>
                                                <td>{{$c->monto_aut}}</td>
                                                <td>{{ $c->tarjeta_reg }}</td>
                                                <td>
                                                    <button class="btn boton-color px-4 mx-4" onclick="window.location.href='/tablaAmortizacion/{{$c->id}}'">
                                                        Ver
                                                    </button>
                                                </td>
                                                <td>{{$c->num_pagos}}</td>
                                            
                                                <td>
                                                    <button class="btn boton-color px-4 mx-4" onclick="window.location.href='/tablaPagos/{{$c->id}}'">
                                                        Ver
                                                    </button>
                                                </td>
                                                <td>
                                                    {{$c->num_pagos_rest}}
                                                </td>
                                                <td>
                                                    @livewire('backoffice.carteravencida',['user'=>$c->id], key($c->id))
                                                </td>
                                                <td>
                                                    <button class="btn boton-color px-4 mx-4" onclick="window.location.href='/masInformacion/{{$c->id}}'">Ver</button>
                                                </td>
                                                <td>
                                                    @livewire('backoffice.finalizarcredito',['user'=>$c->id],key($c->id))
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                
                                </table>
                                <!--fin tabla de clientes--->
                            </div>
                            <div style="float:right; margin-top:10px;">
                                    @if($clientes!=null)
                                        {{$clientes->links('backoffices.components.paginate')}}
                                    @endif 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

      
    @endsection
