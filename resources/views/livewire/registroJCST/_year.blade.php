
    <select class="form-select" wire:model.defer="year" name="year" required>
        <option selected>Año</option>
        @for ($i=$year_limit;$i<=$year_adult;$i++)
        <option value="{{$i}}">{{$i}}</option>
        @endfor        
    </select>
    @if($errors->has('year'))
    <span style="color:brown;">El campo año es obligatorio</span>
    @endif