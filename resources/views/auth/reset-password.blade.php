
<x-guest-layout>
    <p class="texto-solicita-verde" style="padding-bottom: 25px; padding-top:15px;">Recuperar contraseña</p>
        <center>            
            @if ($errors->any())
                <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content" style="margin: 40px;">
                        
                        <center>
                            <h1 class="titulo-modal" id="exampleModalLabel">
                                @error('password')
                                @if ($message=='Todos los campos son obligatorios')
                                    Campos obligatorios
                                @else
                                    Contraseña inválida
                                @endif
                                @enderror
                                @error('token')
                                    Alto!
                                @enderror
                            </h1>
                        </center>
                    
                        <div class="modal-body" >
                            @foreach ($errors->all() as $e)
                                <p>{{$e}}</p>
                            @endforeach
                            <button type="button" data-bs-dismiss="modal" class="btn-verde btn-md">Cerrar</button>
                        </div>
                    </div>
                    </div>
                </div>
                <script>
                    $( document ).ready(function() {
                        $('#staticBackdrop').modal('toggle')
                    });
                </script>
            @endif
            <div class="row mb-5 w-75">
                <div class="col-2"></div>
                <div class="col-8">
                    <form method="POST" action="{{ route('password.update') }}" >
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <x-input id="email" class="form-control" type="hidden" name="email" :value="old('email', $request->email)" required  autofocus />
                        </div>




                        <div class="row empresa">
                            <input type="password" id="password" class="form-control" placeholder="* Nueva Contraseña" wire:model.defer="password" name="password" maxlength="50" required>
                            
                            <input type="password" id="password2"class="form-control" placeholder="* Confirmación de contraseña" wire:model.defer="password_confirmation" name="password_confirmation" maxlength="50" required style="margin-top:15px;">
                            @if ($errors->has('password'))
                                <span style="color:brown;">{{ $errors->first('password') }}</span>
                            @endif 
                            <div class="center">
                                <button type="button" class="btn btn-cambio" wire:click="cambiar">Aceptar</button>       
                            </div>

                            <div>
                                <center>
                                    <button class="btn btn-naranja btn-md" style="float: right; background: #da8b0c;" type="submit">Recuperar contraseña</button> 
                                    <button type="button" class="btn btn-cambio" wire:click="cambiar" style="float: left;">Cancelar</button>    
                                </center>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-2"></div>
            </div>
        </center>
</x-guest-layout>