<div class="grid grid-cols-3 ">
        <div class="col-span-1 text-start">
            <i class="fa-solid fa-minus plus-prestamo pointer" wire:click="updatePrestamo(false)"></i>
            <span class="text-dark"><strong>$0</strong></span>
        </div>
        <div class="col-span-1 text-center">
            <span class="text-green" style="font-size: 2rem"><strong>$ {{ number_format($prestamo,0) }}</strong></span>
        </div>
        <div class="col-span-1 text-end">
            <span class="text-dark"><strong>$3,000</strong></span>
            <i class="fa-solid fa-plus plus-prestamo pointer" wire:click="updatePrestamo(true)"></i>
        </div>
        <div class="col-span-3">
            <input id="prestamo" wire:model="prestamo" type="range" class="form-range" min="0" max="3000">
        </div>
</div>
