<div class="grid grid-cols-3 ">
        <div class="col-span-1 text-start self-center">
            <i class="fa-solid fa-minus plus-prestamo pointer" wire:click="updateTiempo(false)"></i>
            <span class="texto-gris font-24" ><strong>1 mes</strong></span>
        </div>
        <div class="col-span-1 text-center">
            <span class="text-green textoResaltado" style="font-size: 2.3rem;"><strong>{{ $tiempo }} mes</strong></span>
        </div>
        <div class="col-span-1 text-end self-center">
            <span class="texto-gris font-24"><strong>6 meses</strong></span>
            <i class="fa-solid fa-plus plus-prestamo pointer" wire:click="updateTiempo(true)"></i>
        </div>
        <div class="col-span-3">
            <input id="tiempo" wire:model="tiempo" type="range" class="form-range" min="1" max="6">
        </div>
</div>
