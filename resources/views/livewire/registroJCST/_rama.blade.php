  <!--Rama de la empresa-->
  <input class="form-control" list="ramo" placeholder="* Rama de la empresa" wire:model="rama_empresa"/>
  @error('rama_empresa') <span class="error">{{ $message }}</span> @enderror