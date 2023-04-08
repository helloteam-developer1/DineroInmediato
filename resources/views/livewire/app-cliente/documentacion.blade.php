<div>
    <!--Mensajes para el usuario-->
    @if (session()->has('inefrente'))
      <div class="alert alert-success">
        {{session('inefrente')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>
      </div>
    @endif
    @if (session()->has('inereverso'))
      <div class="alert alert-success">
        {{session('inereverso')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>
      </div>
    @endif
    @if (session()->has('comp_dom'))
      <div class="alert alert-success">
        {{session('comp_dom')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>
      </div>
    @endif
    @if (session()->has('fotocine'))
      <div class="alert alert-success">
        {{session('fotocine')}}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right;"></button>
      </div>
    @endif
 
    @error('img')
      <center>
        <div class="alert alert-danger">
            {{$message}}
        </div>
      </center>
    @enderror
    
    <div class="row">
      
        {{-- alerta de carga ine frente --}}
        <div wire:loading wire:target="ine_frente" class="alerta alert" role="alert">
            <center>
                <p class="titulo-alert">Espera estamos cargando Ine Frente...</p>
                <p class="subt-alert">El tiempo de espera dependerá de la velocidad de tu internet.</p>
            </center>
        </div>
        {{-- alerta de carga reverso --}}
        <div wire:loading wire:target="ine_reverso" class="alerta alert" role="alert">
            <center>
                <p class="titulo-alert">Espera estamos cargando Ine Reverso...</p>
                <p class="subt-alert">El tiempo de espera dependerá de la velocidad de tu internet.</p>
            </center>
        </div>
        {{-- alerta de carga comprobante de docmicilio --}}
        <div wire:loading wire:target="comp_dom" class="alerta alert" role="alert">
            <center>
                <p class="titulo-alert">Espera estamos cargando comprobante de domicilio...</p>
                <p class="subt-alert">El tiempo de espera dependerá de la velocidad de tu internet.</p>
            </center>
        </div>
        {{-- alerta de carga foto con ine --}}
        <div wire:loading wire:target="foto_cine" class="alerta alert" role="alert">
            <center>
                <p class="titulo-alert">Espera estamos cargando foto con ine...</p>
                <p class="subt-alert">El tiempo de espera dependerá de la velocidad de tu internet.</p>
            </center>
        </div>
        <div wire:loading wire:target="subirIMG" class="alerta alert" role="alert">
          <center>
              <p class="titulo-alert">Cargando...</p>
              <p class="subt-alert">El tiempo de espera dependerá de la velocidad de tu internet.</p>
          </center>
      </div>

    </div>
    @switch($documentacion)
      @case(0)
        <h1 style="color:#f29100;">Documentación en revisión.</h1>
      @break
      @case(1)
        {{--Documentación Exitosa--}}
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">INE Frente</label>
          <div class="col-sm-4">
            <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button>
          </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">INE Reverso</label>
          <div class="col-sm-4">
            <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button>
          </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Comprobante de domicilio</label>
          <div class="col-sm-4">
            <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button>
          </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Foto con INE</label>
          <div class="col-sm-4">
            <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button>
          </div>
        </div>
      @break
      @case(2)
        {{--Sin opción de subir img--}}
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Frente</label>
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4">
              <a class="btn btn-gris" >Adjuntar archivo</a>

            </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Reverso</label>
          <div class="col-sm-2">
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" >Adjuntar archivo</a>
            </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Comprobante de domicilio</label>
          <div class="col-sm-2">
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" >Adjuntar archivo</a>

            </div>
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Foto con INE</label>
          <div class="col-sm-2">
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris">Adjuntar archivo</a>

            </div>
        </div>
      @break
      @case(3)
        @include('appCliente.documentacion.formularioimg')
      @break
      @case(4)
        <h1>Documentación en revisión.</h1>
      @break
      @case(5)
        @include('appCliente.documentacion.formularioimg')
      @break
      @default

    @endswitch








    <br />
    {{-- Estado de la documentación --}}
    <div class="container" style="margin: 20px;">
        <div class="row mb-3 j ustify-content-center">
            <div class="col-8">
              @switch($documentacion)
                @case(1)
                  <img src="img/assets/aplicacionCliente/Grupo 117.png" alt="" width="3%" height="auto">
                  <span>La información es correcta y ha sido verificada.</span>
                @break
                @case(3)
                  <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" style="margin-right: 5px;" width="6%" height="auto">
                  <span>Favor de subir la documentación solicitada o editar el campo incorrecto.</span>
                @break
                @case(4)
                  <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="6%" height="auto">
                  <span style="border-color: red;">X Favor de subir un documento válido, actual o vigente.</span>
                @break
                @default

              @endswitch


            </div>
            <div class="col">
                @if ($documentacion==3 || $documentacion==5)
                <a class="btn btn-Guardar" wire:click="subirIMG">Guardar</a>
                @endif
                @if ($documentacion==2)
                <a class="btn btn-Guardar">Guardar</a>
                @endif
            </div>
        </div>
    </div>

</div>
