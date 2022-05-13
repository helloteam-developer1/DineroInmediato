<div>


    <div class="row col-12">

        <div class="col-4">
            -
            <span class="{{ $prestamo == 0 ? 'text-danger' : ''}}" wire:click="$set('prestamo', 0)"> <strong>$0</strong></span>
        </div>
        <div class="col-4">
            <span class="{{ $prestamo == 2600 ? 'text-danger' : ''}}"><strong>$ {{ $prestamo }}</strong></span>
        </div>
        <div class="col-4">
            <span class="text-danger" wire:click="$set('prestamo', 3000)"><strong>$3,000</strong></span>
            <i class="fa fa-circle-plus"></i>
        </div>
    </div>


    <input wire:model="prestamo" type="range" class="form-range" min="0" max="3000">
    {{ $prestamo }}
</div>
