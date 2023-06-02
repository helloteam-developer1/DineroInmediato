<div>
    <button class="btn boton-color" data-bs-toggle="modal" data-bs-target="#regularizar{{$num_credito}}">
        Regularizar
    </button>
    <!--Inicio de modal regularizar cliente -->
    <div class="modal fade" wire:ignore.self id="regularizar{{$num_credito}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Regularizar cliente.</h5>                       
                    <div class="container-fluid">
                        <div wire:loading wire:target="cartera"  class="alert container-fluid mt-1" role="alert" style="background-color: #39A935;">
                            <center>
                                <i class="fa-regular fa-clock" style="color: #ffffff; display:inline-block;"></i>
                                <h4 style="color:white; font-size:15px; display:inline-block;">Cargando...</h4>
                            </center>
                            <h4 style="color:white; font-size:15px; ">Esto dependera de tu conexión de internet.</h4>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <p class="text-secondary">Este apartado sirve para regresar al cliente a un estado de regularización de crédito. Si el cliente ya ha cumplido o ha regularizado su crédito, haga clic en este haga clic en el botón aceptar para regresarlo a la tabla de <span style="color:black; font-weight:900;">clientes aceptados</span>, de lo contrario de clic en el botón cancelar 
                                            .</p>
                                        {{$registro}}
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
                                            style="background-color: #38a937; color:white; float:left;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #f29100; color:white; float:right;" wire:click="regularizar({{$num_credito}})" wire:loading.class="disabled">Aceptar</button>
                                    </div>
                                    @error('regularizar')
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                                <span style="color:red;">{{$message}}</span>
                                            </div>
                                        </div>
                                    @enderror 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin d modal regularizar cliente -->
</div>
