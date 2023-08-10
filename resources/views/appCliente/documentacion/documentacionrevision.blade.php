<style>
    @media (min-width: 992px) {
    .mover-derecha {
        margin-left: 230px;
    }
}
</style>

<h1 class="texto-carotSans--Medium titulo mover-derecha" style="color: #4A9D22; font-size: 2rem;">Credito en Revision</h1>

<div class="row mb-3 justify-content-center">
    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Frente</label>
    <div class="col-sm-2">
        <img src="{{Auth::user()->ine_frente}}" style="width: 30%; height:auto;">
    </div>
</div>
<div class="row mb-3 justify-content-center">
    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE Reverso</label>
    <div class="col-sm-2">
        <img src="{{Auth::user()->ine_reverso}}" style="width: 30%; height:auto;">
    </div>
</div>
<div class="row mb-3 justify-content-center">
    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Comprobante de Domicilio</label>
    <div class="col-sm-2">
        <img src="{{Auth::user()->comp_dom}}" style="width: 30%; height:auto;">
    </div>
</div>
<div class="row mb-3 justify-content-center">
    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">Foto con INE</label>
    <div class="col-sm-2">
        <img src="{{Auth::user()->foto_cine}}" style="width: 30%; height:auto;">
    </div>
</div>
