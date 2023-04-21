@extends('backoffices.layouts.basesinmenu')
@section('titulo','Historal de Pago')
@section('icono')
    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/Grupo 979.png') }}">
@endsection


@section('subtitulo')
<h1 class="text-center my-5">Historial de Pago</h1>
@endsection



  @section('contenido')
    <!--inicio de titulo-->
    <!--fin de titulo-->

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-10 col-sm-10 col-md-8 col-lg-5 offset-1 offset-sm-2 offset-md-4 offset-lg-7">
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
                          <div class="table-responsive text-center">
                              <table class="table table-bordered border-secondary"
                                  id="tabla-amortizacion">
                                  <thead>
                                      <tr class="table-secondary">
                                          <th scope="col" class="px-5"><p class="encabezado-tabla-medio pt-3">Número de crédito</p></th>
                                          <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Número de pago</p></th>
                                          <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Fecha de pago</p></th>
                                          <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Monto pagado</p></th>
                                          <th scope="col" class="px-5"><p class="encabezado-tabla-normal">Saldo insoluto</p></th>
                                      </tr>
                                  </thead>
                                 <tbody>
                                      @if ($pagos->count())
                                          @foreach ($pagos as $p)
                                              <tr class="table-light">
                                                  <td>{{$p->num_credito}}</td>
                                                  <td>{{$p->numero_pagos}}</td>
                                                  <td>{{$p->fecha_pago}}<img src="{{ asset('img/backoffices/CALENDARIO.png') }}" class="ms-4" width="40" alt=""></td>
                                                  <td>{{$p->monto_pago}}</td>
                                                  <td>{{$p->saldo_insoluto}}</td>
                                              </tr>
                                          @endforeach
                                      @else
                                          <tr class="table-light">
                                              <td colspan="5">Sin Registros.</td>
                                          </tr>
                                      @endif
                                    
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
                      <div class="col-12 col-sm-8 col-md-4 col-lg-2 offset-sm-2 offset-md-4 offset-lg-8">
                          <nav aria-label="Page navigation example">
                              @if ($pagos->count())
                                  {{$pagos->links('backoffices.components.paginate')}}
                              @endif
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--fin de paginador-->
  
      <!--inicio de botones-->
      <div class="container-fluid mt-5">
          <div class="row">
              <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                  <div class="row">
                      <div class="col-12 col-sm-4 col-md-4 col-lg-4 offset-sm-2 offset-lg-2 offset-md-2">
                          <button type="button" class="btn px-5 my-3 "
                              style="background-color: #38a937; color:white; font-size: 20px;"><a href="{{route('dashboard.creditofinalizado')}}" style="text-decoration: none; color:white;">Volver</a></button>
                      </div>
                      <div class="col-12 col-sm-4 col-md-4 col-lg-4 offset-sm-2 offset-lg-2 offset-md-2">
                          <button type="button" class="btn px-5 my-3 "
                              style="background-color: #f29100; color:white; font-size: 20px;">Guardar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--fin de botones-->
  @endsection