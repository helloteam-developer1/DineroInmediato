
<h1 class="texto-carotSans--Medium titulo mover-derecha" style="color: #4A9D22; font-size: 2rem;">Credito en Revision</h1>

<div class="row mb-3 justify-content-center">
    <div class="col-sm-4 col-md-3">
        <label for="inputEmail3" class="col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Frente</label>
    </div>
    <div class="col-sm-4 col-md-3">
        <img src="{{Auth::user()->ine_frente}}" style="width: 100%; height:auto;">
    </div>
    <div class="col-sm-4 col-md-2" style=" margin-right: 10px;">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#INEFrenteModalIMG">
            Vista previa
        </button>
    </div>
</div>

@if ($ine_frente)
    <div class="modal fade" id="INEFrenteModalIMG" tabindex="-1" aria-labelledby="INEFrenteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="INEFrenteModalLabel">INE FRENTE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ $ine_frente->temporaryUrl() }}" width="100%" height="auto" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endif




<div class="row mb-4 justify-content-start">
    <label for="inputEmail3" class="col-5 col-form-label fw-bold" style="margin-top: 10px; font-family: Carot Sans; color: #3C3C3B; font-size: 1.3rem; ">INE Frente</label>
    <div class="col-3">
        <img src="{{Auth::user()->ine_frente}}" style="width: 80%; height:auto;">

        @if ($ine_frente)
            <div class="modal fade" id="INEFrenteModalIMG" tabindex="-1" aria-labelledby="INEFrenteModalIMG" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title fs-5" id="INEFrenteModalIMG">INE FRENTE</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{Auth::user()->ine_frente}}" width="100%" height="auto" />
                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="button" class="btn btn-Guardar" style="height: 50px; width: 150px; margin-right: 150px; font-size: 25px" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-4 justify-content-start">
        <button type="button" style=" margin-top: 10px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#INEFrenteModalIMG">
            Vista previa
        </button>
        @if ($errors->has('ine_frente'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_frente') }}</span>
        @endif
    </div>
</div>





<div class="row mb-4 justify-content-start">
    <label for="inputEmail3" class="col-5 col-form-label fw-bold" style="margin-top: 10px; font-family: Carot Sans; color: #3C3C3B; font-size: 1.3rem; ">INE Reverso</label>
    <div class="col-3">
        <img src="{{Auth::user()->ine_frente}}" style="width: 80%; height:auto;">

        @if ($ine_frente)
            <div class="modal fade" id="INEFrenteModalIMG" tabindex="-1" aria-labelledby="INEFrenteModalIMG" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title fs-5" id="INEFrenteModalIMG">INE Reverso</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{Auth::user()->ine_reverso}}" style="width: 100%; height:auto;">

    
                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="button" class="btn btn-Guardar" style="height: 50px; width: 150px; margin-right: 150px; font-size: 25px" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-4 justify-content-start">
        <button type="button" style=" margin-top: 10px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#INEFrenteModalIMG">
            Vista previa
        </button>
        @if ($errors->has('ine_frente'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_frente') }}</span>
        @endif
    </div>
</div>




<div class="row mb-4 justify-content-start">
    <label for="inputEmail3" class="col-5 col-form-label fw-bold" style="margin-top: 10px; font-family: Carot Sans; color: #3C3C3B; font-size: 1.3rem; ">Comprobante de Domicilio</label>
    <div class="col-3">
        <img src="{{Auth::user()->ine_frente}}" style="width: 80%; height:auto;">

        @if ($ine_frente)
            <div class="modal fade" id="INEFrenteModalIMG" tabindex="-1" aria-labelledby="INEFrenteModalIMG" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title fs-5" id="INEFrenteModalIMG">Comprobante de Domicilio</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <img src="{{Auth::user()->comp_dom}}" style="width: 100%; height:auto;">
      
                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="button" class="btn btn-Guardar" style="height: 50px; width: 150px; margin-right: 150px; font-size: 25px" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-4 justify-content-start">
        <button type="button" style=" margin-top: 10px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#INEFrenteModalIMG">
            Vista previa
        </button>
        @if ($errors->has('ine_frente'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_frente') }}</span>
        @endif
    </div>
</div>



<div class="row mb-4 justify-content-start">
    <label for="inputEmail3" class="col-5 col-form-label fw-bold" style="margin-top: 10px; font-family: Carot Sans; color: #3C3C3B; font-size: 1.3rem; ">Foto con INE</label>
    <div class="col-3">
        <img src="{{Auth::user()->ine_frente}}" style="width: 80%; height:auto;">

        @if ($ine_frente)
            <div class="modal fade" id="INEFrenteModalIMG" tabindex="-1" aria-labelledby="INEFrenteModalIMG" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title fs-5" id="INEFrenteModalIMG">Foto con INE</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <img src="{{Auth::user()->foto_cine}}" style="width: 100%; height:auto;">

                        </div>
                        <div class="modal-footer" style="border: none;">
                            <button type="button" class="btn btn-Guardar" style="height: 50px; width: 150px; margin-right: 150px; font-size: 25px" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="col-4 justify-content-start">
        <button type="button" style=" margin-top: 10px;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#INEFrenteModalIMG">
            Vista previa
        </button>
        @if ($errors->has('ine_frente'))
            <span style="color:brown; text-align:initial; float:left;">{{ $errors->first('ine_frente') }}</span>
        @endif
    </div>
</div>