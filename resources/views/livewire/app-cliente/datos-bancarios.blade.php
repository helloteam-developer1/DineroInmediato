<div>
    <!--Mensajes-->
        @if (!empty($mensaje))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{$mensaje}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (!empty($fail))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{$fail}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    <!--Mensajes-->
    <p class="texto-carotSans--ExtraLight">Para depósito del crédito bancario:</p>
    <p class="texto-carotSans--ExtraLight">Ingrese sus datos de su cuenta de nómina para depositar su crédito aprobado.</p>
    <p>Nota: Es importante que la cuenta donde le depositaremos sea su cuenta de nómina.</p>
    {{--Nombre del titular--}}
    <div class="row mb-3 justify-content-center">
        <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE (Adjuntar INE por ambos lados)</label> -->
        <div class="col-sm-4">
            <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre del titular" wire:model="titular" required>
            @if ($errors->has('titular'))
                <span class="red">{{$errors->first('titular')}}</span>
            @endif
        </div>
    </div>
    {{--Numero de cuenta--}}
    <div class="row mb-3 justify-content-center">
        <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label> -->
        <div class="col-sm-4">
        <input type="text" class="form-control" id="inputEmail3" wire:model="num_cuenta" placeholder="Numero de cuenta" required>
        @if ($errors->has('num_cuenta'))
            <span class="red">{{$errors->first('num_cuenta')}}</span>
        @endif
        
        </div>
    </div>
    {{--Selección de banco--}}
    <div class="row mb-3 justify-content-center">
        <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Comprobante de domicilio</label> -->
        <div class="col-sm-4">
            <select class="form-select" aria-label="Banco" wire:model="banco" required>
            <option selected>Selecciona un banco</option>
                @foreach ($bancos as $b)
                    <option value="{{$b->name}}">{{$b->name}}</option>
                @endforeach
            </select>
            @if ($errors->has('banco'))
                <span class="red">{{$errors->first('banco')}}</span>
            @endif
        </div>
    </div>
    {{--Clave Intervancaria--}}
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-4">
        <input type="text" class="form-control" id="inputEmail3" placeholder="Clave interbancaria" wire:model="clave_inter">
        @if ($errors->has('clave_inter'))
            <span class="red">{{$errors->first('clave_inter')}}</span>
        @endif
        </div>
    </div>
    {{--Numero de Tarjeta--}}
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-4">
        <input type="text" class="form-control" wire:model="num_tarjeta" id="inputEmail3" placeholder="Numero de tarjeta" required>
        @if ($errors->has('num_tarjeta'))
            <span class="red">{{$errors->first('num_tarjeta')}}</span>
        @endif
        </div>
    </div>
    {{--Fecha de Expiración y codigo de seguridad label--}}
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-4">
        <label for="inputEmail3" class="col-sm-6 col-form-label fw-bold">Fecha de expiración</label>
        </div>
        <div class="col-sm-4">
        <label for="inputEmail3" class="col-sm-6 col-form-label fw-bold">Código de seguridad</label>
        </div>
    </div>
    {{--Fecha de Expiración y codigo de seguridad inputs--}}
    <div class="row mb-3 justify-content-center">
        <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label> -->
        <div class="col-sm-2">
            <input type="numeric" placeholder="MM" required class="form-control" wire:model="fecha_mm" maxlength="2">
            @if ($errors->has('fecha_mm'))
                <span class="red">{{$errors->first('fecha_mm')}}</span>
            @endif
        </div>
        <div class="col-sm-2">
            <input type="numeric" placeholder="YY" required class="form-control"  wire:model="fecha_yy"maxlength="2">
            @if ($errors->has('fecha_yy'))
                <span class="red">{{$errors->first('fecha_yy')}}</span>
            @endif
        </div>
        <div class="col-sm-4">
        <input type="text" class="form-control" id="cc-cvv" placeholder="CVV" wire:model="cvv" maxlength="3" wire:model="cvv" required>
        @if ($errors->has('cvv'))
            <span class="red">{{$errors->first('cvv')}}</span>
        @endif
        </div>
    </div>
    {{--Terminos, Condiciones, Cargo--}}
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-4">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" wire:model="terminos" required>
            <label class="form-check-label" for="invalidCheck1">
            Acepto términos y condiciones
            </label>
            @if ($errors->has('terminos'))
                <span class="red">{{$errors->first('terminos')}}</span>
            @endif
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" wire:model="politicas" required>
            <label class="form-check-label" for="invalidCheck2">
            Acepto políticas de privacidad
            </label>
            @if ($errors->has('politicas'))
                <span class="red">{{$errors->first('politicas')}}</span>
            @endif
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" wire:model="cargo_dom" required>
            <label class="form-check-label" for="invalidCheck3">
            Acepto el cargo domicilio
            </label>
            @if ($errors->has('cargo_dom'))
                <span class="red">{{$errors->first('cargo_dom')}}</span>
            @endif
        </div>
        </div>
    </div>
    {{--Boton--}}
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-6">
        <center>
            <button type="submit" class="btn btn-success btn-lg" wire:click="save">Pagar</button>
        </center>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-sm-6">
        <p class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733; font-size: 30px;">
            Aceptamos tarjetas
        </p>
        </div>
    </div>
    
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-6">
        <img src="{{ asset('img/assets/aplicacionCliente/bancos.png')}}" style="width:40%; height:auto;">
        </div>
    </div>
</div>
