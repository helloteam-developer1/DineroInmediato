<div>
    <button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito{{$credito_num}}">
        Finalizar
    </button>
    <!--inicio modal Finalizar credito-->
    <div class="modal fade" wire:ignore.self id="finalizarCredito{{$credito_num}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                        style="font-size: 35px; color:#38a937;">¿Está seguro de finalizar el crédito del cliente? 
                    </h5>
                    <div class="container-fluid mt-5">
                        <!--Efecto de Carga-->
                        <div wire:loading wire:target="finalizar"  class="alert container-fluid" role="alert" style="background-color: #EAF9EA;">
                            <center>
                                <i class="fa-regular fa-clock" style="color: #39A935; display:inline-block;"></i>
                                <h4 style="color:#39A935; font-size:15px; display:inline-block;">Cargando...</h4>
                            </center>
                            <h4 style="color:#F29100; font-size:15px; ">Esto dependera de tu conexión de internet.</h4>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <p class="text-secondary">Al dar clic en el botón aceptar. El cliente pasará a
                                            créditos finalizados esta
                                            acción no se puede deshacer</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        {{$consulta}}
                                        @error('contador')
                                                <span style="color:red;  text-align:center;">{{$message}}</span>
                                        @enderror
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
                                            style="background-color: #f29100; color:white; float:right;" wire:click="finalizar({{$credito_num}})">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin modal Finalizar credito-->
</div>
