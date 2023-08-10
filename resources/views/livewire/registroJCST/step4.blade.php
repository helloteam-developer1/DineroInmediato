<style>
    @media (max-width: 767px) {
  .align-items-between {
    align-items: center;
  }

  .form-check-input {
    margin-right: 10px; /* Ajusta el valor según sea necesario */
  }
}
.link-t-l {
        text-decoration: underline;
        font-size: 13px;
        
    }

    .link-t-l:hover {
        text-decoration: none;
        font-size: 13px;
        color: var(--naranja);
    }
</style>

<div class="container row" style="margin-bottom: 15px; margin-top:15px;">
    <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
        
        {{-- Inicio del formulario 3 --}}
        <div class="col justify-content-center cont-form-t container-fluid">
            

            <div class="col-12 col-md-9">
                <div class="d-flex flex-column ">
                    <p class="titulo-naranja">Documentos</p>
                    <p class="texto">Para hacer uso de su crédito es importante adjuntar la siguiente documentación:</p>
                </div>
            </div>

            {{--Alertas de subida de las img--}}
            <div class="row empresa">
                {{--alerta de carga ine frente--}}
                <div wire:loading wire:target="ine_frente" class="bg-[#EAF9EA] text-[#39A935] rounded-b px-4 py-3 shadow-md mb-6" role="alert">
                    <div>
                        <div>
                            <center>
                                <p class="xl:text-lg lg:text-lg md:text-sm text-[#39A935] text-center text-sm">Espera estamos cargando ine frente...</p>
                                <p class="xl:text-sm lg:text-sm md:text-sm text-[#F29100] text-center text-xs">El tiempo de espera dependerá de la velocidad de tu internet.</p>
                            </center>
                        </div>
                    </div>
                </div>
                {{--alerta de carga reverso--}}
                <div wire:loading wire:target="ine_reverso" class="bg-[#EAF9EA] text-[#39A935] rounded-b px-4 py-3 shadow-md mb-6" role="alert">
                    <div>
                        <div>
                            <center>
                                <p class="xl:text-lg lg:text-lg md:text-sm text-[#39A935] text-center text-sm">Espera estamos cargando ine reverso...</p>
                                <p class="xl:text-sm lg:text-sm md:text-sm text-[#F29100] text-center text-xs">El tiempo de espera dependerá de la velocidad de tu internet.</p>
                            </center>
                        </div>
                    </div>
                </div>
                {{--alerta de carga comprobante de docmicilio--}}
                <div wire:loading wire:target="comp_dom" class="bg-[#EAF9EA] text-[#39A935] rounded-b px-4 py-3 shadow-md mb-6" role="alert">
                    <div>
                        <div>
                            <center>
                                <p class="xl:text-lg lg:text-lg md:text-sm text-[#39A935] text-center text-sm">Espera estamos cargando comprobante de domicilio...</p>
                                <p class="xl:text-sm lg:text-sm md:text-sm text-[#F29100] text-center text-xs">El tiempo de espera dependerá de la velocidad de tu internet.</p>
                            </center>
                        </div>
                    </div>
                </div>
                <div wire:loading wire:target="foto_cine" class="bg-[#EAF9EA] text-[#39A935] rounded-b px-4 py-3 shadow-md mb-6" role="alert">
                    <div>
                        <div>
                            <center>
                                <p class="xl:text-lg lg:text-lg md:text-sm text-[#39A935] text-center text-sm">Espera estamos cargando foto con ine...</p>
                                <p class="xl:text-sm lg:text-sm md:text-sm text-[#F29100] text-center text-xs">El tiempo de espera dependerá de la velocidad de tu internet.</p>
                            </center>
                        </div>
                    </div>
                </div>
                {{--alerta de carga foto con ine--}} 
            </div>
            {{-- Campos para subir datos --}}
            {{--Ine Frente--}}
            <div class="col-12 col-md-6">
                <div class="d-flex flex-column align-items-md-end">
                    <p class="texto-rojo-s">"Recuerda subir tus documentos de la forma más legible posible"</p>
                    <p class="texto-negro-s-e">"Los archivos no deben pesar más de 2 MB."</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-2">
                    @if ($ine_frente)
                        <img src="{{ $ine_frente->temporaryUrl() }}" width="90%" height="auto" />
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <p class="texto">INE (frente)</p>
                    @if ($errors->has('ine_frente'))
                    <span style="color:brown; text-align:initial;">{{ $errors->first('ine_frente') }}</span>
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <a class="btn btn-gris" onclick="document.getElementById('getFileine_frente').click()">Adjuntar
                        archivo</a>
                    <input type='file' id="getFileine_frente" style="display: none" name="ine_frente"
                        wire:model.defer="ine_frente" accept="image/*" >
                </div>
            </div>
            <br />
            {{--Ine Reverso--}}
            <div class="row">
                <div class="col-12 col-md-2">
                    @if ($ine_reverso)
                        <img src="{{ $ine_reverso->temporaryUrl() }}" width="90%" height="auto" />
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <p class="texto">INE (reverso)</p>
                    @if ($errors->has('ine_reverso'))
                        <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_reverso') }}</span>
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <a class="btn btn-gris" onclick="document.getElementById('getFileine_reverso').click()">Adjuntar
                        archivo</a>
                    <input type='file' id="getFileine_reverso" style="display:none" name="ine_reverso"
                        wire:model.defer="ine_reverso" accept="image/*">
                </div>
            </div>
            <br />
            {{--Comprobante de domicilio--}}
            <div class="row">
            <div class="col-12 col-md-2">
                    @if ($comp_dom)
                        <img src="{{ $comp_dom->temporaryUrl() }}" width="90%" height="auto" />
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <p class="texto">Comprobante de domicilio</p>
                    @if ($errors->has('comp_dom'))
                        <span style="color:brown; text-align:initial; ">{{ $errors->first('comp_dom') }}</span>
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <a class="btn btn-gris" onclick="document.getElementById('getFilecomp_dom').click()">Adjuntar archivo</a>
                    <input type='file' id="getFilecomp_dom" style="display:none" name="comp_dom"
                        wire:model.defer="comp_dom" accept="image/*">
                </div>
            </div>
            <br />
            {{--Foto con ine --}}
            <div class="row">
                <div class="col-12 col-md-2">
                    @if ($foto_cine)
                        <img src="{{ $foto_cine->temporaryUrl() }}" width="90%" height="auto" />
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <p class="texto">Tomate una foto con tu INE </p>
                    @if ($errors->has('foto_cine'))
                        <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('foto_cine') }}</span>
                    @endif
                </div>
                <div class="col-6 col-md-4">
                    <a class="btn btn-gris" onclick="document.getElementById('getFilefoto_cine').click()">Adjuntar
                        archivo</a>
                    <input type='file' id="getFilefoto_cine" style="display:none" name="foto_cine"
                        wire:model.defer="foto_cine" accept="image/*">
                </div>
            </div>
            <br />
            {{--fotografia--}}
            <div class="row" >
                <div class="col-12 col-md-3"></div>
                <div class="col-12 col-md-6">
                    <div>
                        <img src="{{ asset('img/landing/index/perfil.png') }}" class="img">
                    </div>
                    <div>
                        <p class="texto-verde-p empresa">La fotografía no debe de ser tomada con: (gorra, lentes o algún objeto
                            viendo a la cámara a qué altura la INE)
                        </p>
                    </div>
                    
                </div>
                <div class="col-12 col-md-1"></div>
            </div>
            {{--Acepto--}}
            <div class="col-12 col-md-6 align-items-start">
                <div class="d-flex flex-column ">
                    <label class="f-label label-ac" for="test">
                        <div class="d-flex align-items-start">
                            <input class="form-check-input input-ac" type="checkbox" value="" id="test" wire:model="acepto">
                            <span style="text-align: left;"> &nbsp;Acepto que mi información sea investigada en buró de crédito.</span>
                        </div>
                    </label>
                
                </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-12 col-md-4"></div>
                <div class="col-12 col-md-6">
                    <div>
                        <p class="text-justify" for="flexCheckDefault">
                            Al hacer clic en "Continuar", estarás aceptando el 
                            <span data-bs-toggle="modal" class="link-t-l" data-bs-target="#politicaPrivacidad" >AVISO DE PRIVACIDAD,</span>
                            <span data-bs-toggle="modal" class="link-t-l" data-bs-target="#terminosCondiciones">TÉRMINOS Y CONDICIONES</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-12">
                            <x-modal-footer titulo="quienes-somos" idm="quienesSomos"/>
                            <x-modal-footer titulo="politica-privacidad" idm="politicaPrivacidad"/>
                </div>
                <div class="col-1"></div>
                @if ($errors->has('acepto'))
                    <span style="color:brown; text-align:center; float:left;">{{ $errors->first('acepto') }}</span>
                @endif
            </div>
            <br />
            {{-- Botones formulario 3 --}}
            
            
            {{--Alerta de carga--}}
            <div class="row">
                <div class="col-12">
                    <div wire:loading wire:target="submitFormsinIMG" class="bg-[#EAF9EA]  text-[#39A935] px-4 py-3" role="alert" style="margin-bottom: 20px">
                        <p class="font-bold">Cargando...</p>
                        <p class="text-sm text-[#F29100]">Esto dependera de la valocidad de tu internet.</p>
                    </div>
                    <div wire:loading wire:target="submitForm" class="bg-[#EAF9EA]  text-[#39A935] px-4 py-3" role="alert" style="margin-bottom: 20px">
                        <p class="font-bold">Cargando...</p>
                        <p class="text-sm text-[#F29100]">Esto dependera de la valocidad de tu internet y el peso de tus img.</p>
                    </div>
                </div>
            </div>
            
            {{--Botones regresa, continuar, con. sin documentación--}}
            <div class="row">
                <div class="d-grid gap-2 d-md-flex botones">
                    <button class="btn btn-cont btn-block" wire:click="back(3)" style="margin-bottom: 10px;">Regresar</button>
                    <button class="btn btn-con-doc btn-block" wire:click="submitFormsinIMG" id="sindoc" style="margin-bottom: 10px;">Continuar sin documentación</button>
                    <button class="btn btn-reg btn-block" wire:click="submitForm" id="condoc" style="margin-bottom: 10px;">Continuar</button>
                </div>
            
            </div>

        </div>

    </div>
</div>




{{-- Ventana modal --}}
@include('livewire/registroJCST/modales/_modal')
