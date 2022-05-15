<div class="mt-5">

    <div class="row col-12">

        <div class="col-4 align-self-center  ">
            <i class="fa-solid fa-minus plus-prestamo pointer" wire:click="updateTiempo(false)"></i>
            <span class="text-dark"><strong>1 mes</strong></span>
        </div>
        <div class="col-4">
            <span class="text-green" style="font-size: 2rem"><strong>{{ $tiempo }} mes</strong></span>
        </div>
        <div class="col-4 align-self-center  ">
            <span class="text-dark"><strong>6 meses</strong></span>
            <i class="fa-solid fa-plus plus-prestamo pointer" wire:click="updateTiempo(true)"></i>
        </div>
    </div>

    <input id="tiempo" wire:model="tiempo" type="range" class="form-range" min="1" max="6">


</div>
