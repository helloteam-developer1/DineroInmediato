<div>
    <!--Mensajes para el usuario-->
    @if (!empty($successMessage))
        <center>
            <div class="alert alert-success">
                {{ $successMessage }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </center>
    @endif
    @if (!empty($info))
        <center>
            <div class="alert alert-info">
                {{ $info }}
            </div>
        </center>
    @endif
    {{--IMG VISTA PREVIA--}}
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
        {{--Boton para subir img--}}
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Frente</label>
          <div class="col-sm-2">
            @if ($ine_frente)
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalIMG">
              Vista previa
            </button>
            <div class="modal fade" id="exampleModalIMG" tabindex="-1" aria-labelledby="exampleModalLabelIMG" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabelIMG">INE FRENTE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="{{ $ine_frente->temporaryUrl() }}" width="30%" height="auto" />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
          <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileIneFrente').click()">Adjuntar archivo</a>
              <input type='file' id="getFileIneFrente" style="display:none" name="ine_frente" wire:model="ine_frente">
          </div>
          @if ($errors->has('ine_frente'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_frente') }}</span>
          @endif
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Reverso</label>
          <div class="col-sm-2">
            
            @if ($ine_reverso)
              <img src="{{ $ine_reverso->temporaryUrl() }}" width="30%" height="auto" />
            @endif
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileIneReverso').click()">Adjuntar archivo</a>
              <input type='file' id="getFileIneReverso" style="display:none" name="ine_reverso" wire:model="ine_reverso">
            </div>
            @if ($errors->has('ine_reverso'))
              <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_reverso') }}</span>
            @endif
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Comprobante de domicilio</label>
          <div class="col-sm-2">
            @if ($comp_dom)
              <img src="{{ $comp_dom->temporaryUrl() }}" width="30%" height="auto" />
            @endif
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileComp').click()">Adjuntar archivo</a>
              <input type='file' id="getFileComp" style="display:none" name="comp_dom" wire:model="comp_dom">
            </div> 
            @if ($errors->has('comp_dom'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('comp_dom') }}</span>
            @endif   
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Foto con INE</label>
          <div class="col-sm-2">
            @if ($foto_cine)
              <img src="{{ $foto_cine->temporaryUrl() }}" width="30%" height="auto" />
            @endif
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileCURP').click()">Adjuntar archivo</a>
              <input type='file' id="getFileCURP" style="display:none" name="foto_cine" wire:model="foto_cine">    
            </div>
            @if ($errors->has('foto_cine'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('foto_cine') }}</span>
            @endif
        </div>
      @break
      @case(4)
        <h1>Documentación en revisión.</h1>
      @break
      @case(5)
        {{--Boton para subir img--}}
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Frente</label>
          <div class="col-sm-2">
            @if ($ine_frente)
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalIMG">
              Vista previa
            </button>
            <div class="modal fade" id="exampleModalIMG" tabindex="-1" aria-labelledby="exampleModalLabelIMG" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabelIMG">INE FRENTE</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="{{ $ine_frente->temporaryUrl() }}" width="30%" height="auto" />
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            @endif
          </div>
          <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileIneFrente').click()">Adjuntar archivo</a>
              <input type='file' id="getFileIneFrente" style="display:none" name="ine_frente" wire:model="ine_frente">
          </div>
          @if ($errors->has('ine_frente'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_frente') }}</span>
          @endif
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Reverso</label>
          <div class="col-sm-2">
            
            @if ($ine_reverso)
              <img src="{{ $ine_reverso->temporaryUrl() }}" width="30%" height="auto" />
            @endif
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileIneReverso').click()">Adjuntar archivo</a>
              <input type='file' id="getFileIneReverso" style="display:none" name="ine_reverso" wire:model="ine_reverso">
            </div>
            @if ($errors->has('ine_reverso'))
              <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_reverso') }}</span>
            @endif
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Comprobante de domicilio</label>
          <div class="col-sm-2">
            @if ($comp_dom)
              <img src="{{ $comp_dom->temporaryUrl() }}" width="30%" height="auto" />
            @endif
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileComp').click()">Adjuntar archivo</a>
              <input type='file' id="getFileComp" style="display:none" name="comp_dom" wire:model="comp_dom">
            </div> 
            @if ($errors->has('comp_dom'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('comp_dom') }}</span>
            @endif   
        </div>
        <div class="row mb-3 justify-content-center">
          <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Foto con INE</label>
          <div class="col-sm-2">
            @if ($foto_cine)
              <img src="{{ $foto_cine->temporaryUrl() }}" width="30%" height="auto" />
            @endif
          </div>
            <div class="col-sm-4">
              <a class="btn btn-gris" onclick="document.getElementById('getFileCURP').click()">Adjuntar archivo</a>
              <input type='file' id="getFileCURP" style="display:none" name="foto_cine" wire:model="foto_cine">    
            </div>
            @if ($errors->has('foto_cine'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('foto_cine') }}</span>
            @endif
        </div>
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
                  <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="3%" height="auto">
                  <span>Favor de subir la documentación solicitada o editar el campo incorrecto.</span>    
                @break
                @case(4)
                  <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="3%" height="auto">
                  <span style="border-color: red;">X Favor de subir un documento válido, actual o vigente.</span>
                @break              
                @default
                  
              @endswitch

                
            </div>
            <div class="col">
                @if ($documentacion==3 || $documentacion==5)
                <a class="btn btn-success" wire:click="subirIMG">Guardar</a>                
                @endif
                @if ($documentacion==2)
                <a class="btn btn-success">Guardar</a>
                @endif
            </div>
        </div>
    </div>

</div>
