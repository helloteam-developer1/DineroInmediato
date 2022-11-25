<div class="container">
    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
        <div class="col-1"></div>
        
        {{--Inicio del formulario 3--}}
       <div class="col-10">
        <p class="titulo-naranja">Documentos</p>
        <p class="texto">Para hacer uso de su crédito es importante adjuntar la siguiente documentación:</p>
        <p class="texto-rojo-s">"Recuerda subir tus documentos de la forma más legible posible"</p>
        <p class="texto-negro-s-e">"Los archivos no deben de pesar más de 2 MB."</p>
        <br />
        {{--Campos para subir datos--}}
        
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5"><p class="texto">INE (frente)</p></div>
                <div class="col-5">
                    <a class="btn btn-gris" onclick="document.getElementById('getFileine_frente').click()">Adjuntar archivo</a>
                    <input type='file' id="getFileine_frente" style="display: none" name="ine_frente" wire:model="ine_frente"> 
                </div>
                <div class="col-2"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5"><p class="texto">INE (reverso)</p></div>
                <div class="col-5">
                    <a class="btn btn-gris" onclick="document.getElementById('getFileine_reverso').click()">Adjuntar archivo</a>
                    <input type='file' id="getFileine_reverso" style="display:none" name="ine_reverso" wire:model="ine_reverso">
                </div>
                <div class="col-2"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5"><p class="texto">Comprobante de comicilio<p></div>
                <div class="col-5">
                    <a class="btn btn-gris" onclick="document.getElementById('getFilecomp_dom').click()">Adjuntar archivo</a>
                    <input type='file' id="getFilecomp_dom" style="display:none" name="comp_dom" wire:model="comp_dom">
                </div>
                <div class="col-2"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5"><p class="texto">Tomate una foto con tu INE </p></div>
                <div class="col-5">
                    <a class="btn btn-gris" onclick="document.getElementById('getFilefoto_cine').click()">Adjuntar archivo</a>
                    <input type='file' id="getFilefoto_cine" style="display:none" name="foto_cine" wire:model="foto_cine">
                </div>
                <div class="col-2"></div>
            </div>
            <br />
            <div class="row">
                <div class="col-3"></div>
                <div class="col-7">
                    <img src="{{ asset('img/landing/index/perfil.png')}}" class="img">
                    
                    <p class="texto-verde-p">La fotografía no debe de ser tomada con: (gorra, lentes o algún objeto
                        viendo a la cámara a qué altura la INE)
                    </p>
                </div>
                <div class="col-1"></div>
            </div>
            <br />
            {{--Botones formulario 3--}}
            <div class="row">
                <div class="term" >
                    <center>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="exampleCheck1">
                        <label class="form-check-label informacion2" for="exampleCheck1">
                          Acepto que mi información sea investigada en buro de crédito.
                        </label>
                      </div>
                      <p class="form-check-label informacion3" for="flexCheckDefault">
                        Al hacer clic en "Continuar", estarás aceptando el
                      </p>
                      <a href="" data-toggle="modal" data-target="#aviso" class="subrayadot">
                          AVISO DE PRIVACIDAD y TÉRMINOS Y CONDICIONES
                        </a>
                    </center>
                    <div class="esp">
                        <button  class="btn btn-verde btn-md btn-block" wire:click="back(2)" style="float: left;">Regresar</button>
                        <button  class="btn btn-naranja btn-md btn-block" wire:click="submitForm" style="float: right;">Continuar</button>
                    </div>
                </div>
            </div>
    
        
            </div>
        
       </div>
       <div class="col-1"></div>
       
    </div>
    </div>
    {{--Ventana modal--}}
    @include('livewire/registroJCST/modales/_modal')