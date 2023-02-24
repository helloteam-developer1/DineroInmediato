<select class="form-select" name="mes" wire:model.defer="mes" required>
    <option selected>Mes</option>
    <option value="Enero">Enero</option>
    <option value="Febrero">Febrero</option>
    <option value="Marzo">Marzo</option>
    <option value="Abril">Abril</option>
    <option value="Mayo">Mayo</option>
    <option value="Junio">Junio</option>
    <option value="Julio">Julio</option>
    <option value="Agosto">Agosto</option>
    <option value="Septiembre">Septiembre</option>
    <option value="Octubre">Octubre</option>
    <option value="Noviembre">Noviembre</option>
    <option value="Diciembre">Diciembre</option>
</select>
@if($errors->has('mes'))
<span style="color:brown;">{{ $errors->first('mes') }}</span>
@endif