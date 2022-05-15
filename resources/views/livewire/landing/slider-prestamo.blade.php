<div class="mt-5">

    <div class="row col-xs-12 col-md-12">

        <div class="col-4 align-self-center  ">
            <i class="fa-solid fa-minus plus-prestamo pointer" wire:click="updatePrestamo(false)"></i>
            <span class="text-dark"><strong>$0</strong></span>
        </div>
        <div class="col-4">
            <span class="text-green" style="font-size: 2rem"><strong>$ {{ number_format($prestamo,0) }}</strong></span>
        </div>
        <div class="col-4 align-self-center  ">
            <span class="text-dark"><strong>$3,000</strong></span>
            <i class="fa-solid fa-plus plus-prestamo pointer" wire:click="updatePrestamo(true)"></i>
        </div>
    </div>

    <input id="prestamo" wire:model="prestamo" type="range" class="form-range" min="0" max="3000">


</div>
