<div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-8 col-lg-6 offset-1 offset-sm-2 offset-md-2 offset-lg-3">
                        <div class="col-10 col-sm-10 col-md-8 col-lg-6 offset-1 offset-sm-1 offset-md-2 offset-lg-3">
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control fw-light" placeholder="{{$name}}" wire:model="nombre">
                                
                                @error('nombre')
                                    <span style="color:red;">{{$message}}</span>
                                @enderror
                                <center><button class="btn my-4" id="botonCambioContraseña" wire:click="cambiar"
                                    style="background-color: #F29100; color:white; width: 240px;">Cambiar</button></center>
                            </div>
                        </div>
                        <div class="col-10 col-sm-8 col-md-8 col-lg-6 offset-1 offset-sm-2 offset-md-2 offset-lg-3">
                            <button class="btn my-2 ms-5" id="botonCambioContraseña" 
                            onclick="window.location.href='{{route('backofficepassword')}}'"
                            style="background-color: #38a937; color:white; width: 240px;">Cambiar
                            contraseña</button>
                        </div>
                        @error('mensaje')
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
