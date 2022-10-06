<div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">
    <div class="col-1"></div>
    {{--Inicio de campos del Formulario --}}
    <div class="col-10">
            <p class="titulo-naranja">Datos para Iniciar sesión</p>
            <p class="titulo-rojo">Campos (*)</p>
            
            <input class="form-control" type="text" placeholder="* Telefono de contacto" name="telefono" wire:model="telefono">
            @error('telefono') <span class="error">{{ $message }}</span> @enderror
            <input type="text" class="form-control" placeholder="* Correo electrónico" wire:model="email"><br/>
            @error('email') <span class="error">{{ $message }}</span> @enderror
            <input type="password" class="form-control" placeholder="* Contraseña" wire:model="contrasena" name="password">
            @error('contrasena') <span class="error">{{ $message }}</span> @enderror
            <br />
            <input type="password" class="form-control" placeholder="* Verificar contraseña" name="password_confirmation">
            
            

            <br />
        {{--Botones del formulario 2--}}
        <div class="row btns">
            <div class="col-2">
                <button class="btn btn-verde nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Regresar</button>
            </div>
            <div class="col-8">
                
            </div>
            <div class="col-2">
                <button class="btn btn-naranja nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Continuar</button>
            </div>
        </div>

    </div>

    <div class="col-1"></div>

</div>
