<div>

    <button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud{{$user->id}}" >Aceptar Solicitud</button>
    {{--Modal Aceptar Solicitud--}}
    <div class="modal fade" wire:ignore.self id="AceptarSolicitud{{$user->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Aprobar crédito {{$user->nombre}}</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <!--Modal de Carga-->
                                    <div wire:loading wire:target="aceptar"  class="alert " role="alert" style="background-color: #39A935;">
                                        <i class="fa-regular fa-clock" style="color: #ffffff; display:inline-block;"></i>
                                        <h4 style="color:white; font-size:15px; display:inline-block;">Cargando...</h4>
                                       <h4 style="color:white; font-size:15px; ">Esto dependera de tu conexión de internet.</h4>
                                    </div>
                                    @error('igual')
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <i class="fa-solid fa-circle-exclamation"></i><strong style="margin-left: 5px;">Error!</strong> Los montos no son iguales.
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @enderror
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                        @if (!empty($success))
                                            <p>{{$success}}</p>
                                        @endif
                                        <div>
                                            <label for="" class="pb-2">Monto de crédito aprobado: @if (empty($monto))
                                                
                                            @else
                                                {{'$'.number_format($monto)}}
                                            @endif</label>
                                            <input type="number" name="number" id=""
                                                class="form-control money" placeholder="$2500"
                                                wire:model.debounce.1s="monto">
                                            @error('monto')
                                                <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="mt-4">
                                            <label for="" class="pb-2">Confirmado de crédito
                                                    aprobado: 
                                                @if (empty($confirmacion))
                                                @else
                                                
                                                {{'$'.number_format($confirmacion)}}
                                                @endif</label>
                                                <input type="number" name="" id="" class="form-control money"
                                                    placeholder="$2500" wire:model.debounce.1s="confirmacion" >
                                                @error('confirmacion')
                                                    <span style="color:red;">{{$message}}</span>
                                                @enderror
                                        </div>    
                                            @if (!empty($mensaje))
                                                <p>{{$mensaje}}</p>
                                            @endif
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="border: none;">
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 350px;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        @if (empty($monto) || empty($confirmacion))
                                            <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;" 
                                            wire:click="aceptar({{$user->id}})" disabled>Guardar</button>
                                        @else
                                            @if ($monto == $confirmacion)
                                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;" 
                                                wire:click="aceptar({{$user->id}})" >Guardar</button>
                                            @else
                                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;" 
                                                wire:click="aceptar({{$user->id}})" disabled>Guardar</button>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</div>
