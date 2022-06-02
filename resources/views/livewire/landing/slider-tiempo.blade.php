<div class="grid grid-cols-3 m-2 mr-4">
        <div class="col-span-1 text-start self-center">
            <i class="fa-solid fa-minus plus-prestamo pointer menos" wire:click="updateTiempo(false)"></i>
            <span class="texto-gris fontinfo" ><strong>1 mes</strong></span>
        </div>
        <div class="col-span-1 text-center">
            <span class="text-green textoResaltado valorCambiar" style="font-size: 2.3rem;"><strong>{{ $tiempo }} mes</strong></span>
        </div>
        <div class="col-span-1 text-end self-center">
            <span class="texto-gris fontinfo"><strong>6 meses</strong></span>
            <i class="fa-solid fa-plus plus-prestamo pointer mas" wire:click="updateTiempo(true)"></i>
        </div>


        <div class="col-span-3">
            <p class="range">
                <input type="range" wire:model="tiempo" min="0"  max="6" value="0" id="tiempo">
                <output hidden></output>

            </p>
            {{-- <input wire:ignore id="prestamo" wire:model="prestamo"  type="range" max="3000"  > --}}
        </div>

<script>
    $(document).on('change', '#tiempo', function (e) {
        console.log($(this).val());
        if ($(this).val() == 0) {
            $('#tiempo').val(1)
            sliders();
        }
    });
    $('.mas').click(function (e) {

        $('#tiempo').val(@this.tiempo + 1)
        sliders();
    });

    $('.menos').click(function (e) {

$('#tiempo').val(@this.tiempo - 1)
sliders();
});
</script>

</div>
