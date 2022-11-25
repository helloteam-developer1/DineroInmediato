<div class="container">
    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }} justify-content-center" id="step-1" >
                    
        
            <p class="texto">Tu tienes una línea de crédito pre aprobada con nosotros, está línea de crédito se debe verificar por expertos, 
                para ello te solicitaremos una serie de documentos que puedes ingresar en el momento de tu registro o más adelante.</p>
            <p class="titulo-naranja">Llena tu registro para continuar</p>
        
    
        {{--Inicio de campos del Formulario --}}
            <div class="col justify-content-center con-form"  style="margin-bottom: 50px;">
                    <p class="titulo-rojo ">Datos obligatorios (*)</p>
                    <!--Input Nombre-->
                    <input type="text" placeholder="* Nombre completo" class="form-control" wire:model="nombre" name="nombre">
                    @error('nombre') <span class="error">{{ $message }}</span> @enderror
                    <!--Input de CURP-->
                    <div class="row">
                        <div class="col-lg">
                            <input type="text" placeholder="* CURP" class="form-control input-c" wire:model="curp" name="curp">
                            @error('curp') <span class="error">{{ $message }}</span> @enderror
                        </div>    
                        <div class="col-auto flex-right">
                            <a class="vinculo" href="https://www.gob.mx/curp/">¿No conoces tu CURP?</a>
                        </div>
                    </div>   
                    <!--Input Fecha de nacimiento-->
                    <div class="row">
                        <div class="col-6 flex-left">
                            * Fecha de nacimiento
                            </div>
                            <div class="col-6">
                            <input type="date" placeholder="" class="form-control" wire:model="fecha_nacimiento" name="fecha_nacimiento">
                            @error('fecha_nacimiento') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div> 
                <!--Lugar de trabajo -->    
                <input type="text" placeholder="* Empresa donde trabajas" class="form-control" wire:model="empresa_trabajo" name="empresa_trabajo"
                @error('empresa_trabajo') <span class="error">{{ $message }}</span> @enderror
                <!--Select Antiguedad-->
                <select class="form-select" wire:model="antiguedad" name="antiguedad">
                    <option>* Antigüedad de su trabajo actual</option>
                    <option value="de 0 a 3 meses ">De 0 a 3 meses </option>
                    <option value="de 3 a 6 meses">De 3 a 6 meses</option>
                    <option value="de 6 a 12 meses">De 6 a 12 meses</option>
                    <option value="1 año">1 año</option>
                    <option value="de 1 a 3 años">De 1 a 3 años</option>
                    <option value="de 3 a 5 años">De 3 a 5 años</option>
                    <option value="de 5 a 10 años">De 5 a 10 años</option>
                    <option value="mas de 10 años">Más de 10 años</option>
                </select>
                @error('antiguedad') <span class="error">{{ $message }}</span> @enderror
                <br />
                <!--Incluyo el autocompletable que esta en _rama-->
                @include('livewire.registroJCST._rama')
                
                <!--Banco de Cuentas-->
                <select class="form-select" wire:model="banco_nomina" name="banco_nomina">
                    <option>* Banco de cuenta de nomina</option>
                    
                    @foreach ($empresas as $e)
                    <option value="{{$e->name}}">{{ $e->name }}</option>    
                    @endforeach
                </select>
                @error('banco_nomina') <span class="error">{{ $message }}</span> @enderror
                <br />
    
                {{--Botones del formulario 1--}}
                <div>
                    <a  class="btn btn-verde btn-md btn-block"  style="float: left;" wire:click="{{route('home')}}">Regresar</a>
                    <a class="btn btn-naranja btn-md btn-block"  wire:click="firstStepSubmit" style="float: right;">Continuar</a>
                </div>
              
    
            </div>
        
    </div>
    </div>