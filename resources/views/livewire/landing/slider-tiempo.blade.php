<div class="grid grid-cols-3 ">
        <div class="col-span-1 text-start">
            <i class="fa-solid fa-minus plus-prestamo pointer" wire:click="updateTiempo(false)"></i>
            <span class="text-dark"><strong>1 mes</strong></span>
        </div>
        <div class="col-span-1 text-center">
            <span class="text-green" style="font-size: 2rem"><strong>{{ $tiempo }} mes</strong></span>
        </div>
        <div class="col-span-1 text-end">
            <span class="text-dark"><strong>6 meses</strong></span>
            <i class="fa-solid fa-plus plus-prestamo pointer" wire:click="updateTiempo(true)"></i>
        </div>
        <div class="col-span-3">
            <input id="tiempo" wire:model="tiempo" type="range" class="form-range" min="1" max="6">
        </div>
</div>
