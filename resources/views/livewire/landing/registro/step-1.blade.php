<div class='flex items-center justify-center  from-teal-100 via-teal-300 to-teal-500 '>
    <div class='w-full max-w-lg px-10 py-8   '>
        <div class='max-w-md mx-auto space-y-6'>
                <div class="grid grid-cols-2">
                    {{-- span obligatorios --}}
                    <div class="col-span-2 mb-4 text-right">
                        <span class="text-red-600">Datos obligatorios *</span>
                    </div>

                    {{-- nombre --}}




                    <div class="col-span-2 mb-4">
                        <input type="file" accept="image/*" capture="camera" placeholder="* Nombre completo" class=" border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                    </div>

                    <div class="col-span-2 mb-4">
                        <input wire:model="form.name" type="text" placeholder="* Nombre completo" class="{{ $errors->has('form.name') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                    </div>

                    {{-- curp --}}
                    <div class="col-span-1 mb-4">
                        <input wire:model="form.curp" type="text" maxlength="18" min="18" placeholder="*CURP" class="uppercase {{ $errors->has('form.curp') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                    </div>


                    <div class="col-span-1 self-center text-right  mb-4">
                        <a href="https://www.gob.mx/curp/" class="curp underline decoration-solid" target="_blank">¿No conoces tu CURP?</a>
                    </div>

                    {{-- fecha nacimiento --}}

                    <div class="col-span-1 self-center text-left  mb-4">
                        <label for="">* Fecha de nacimiento</label>
                    </div>

                    <div class="col-span-1 mb-4">
                        <input wire:model="form.fecha_nacimiento" placeholder=" / / " type="date" class="{{ $errors->has('form.fecha_nacimiento') ? 'border-2 border-red-400' : 'border' }} border-solid  w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                    </div>

                    {{-- empresa donde trabajas --}}


                    <div class="col-span-2 mb-4">
                        <input wire:model="form.empresa_trabaja" placeholder="* Empresa donde trabajas" type="text" class="{{ $errors->has('form.empresa_trabaja') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                    </div>

                    {{-- antiguedad --}}

                    <div class="col-span-2 mb-4">
                        <select wire:model="form.antiguedad" class="{{ $errors->has('form.antiguedad') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                            <option hidden value="">* Antiguedad de su trabajo actual</option>
                        </select>

                    </div>

                    <div class="col-span-2 mb-4">
                        <select wire:model="form.rama_empresa" class="{{ $errors->has('form.rama_empresa') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                            <option hidden value="">* Rama de la empresa</option>
                        </select>

                    </div>

                    <div class="col-span-2 mb-4">
                        <select wire:model="form.banco_nomina" class="{{ $errors->has('form.banco_nomina') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                            <option hidden value="">* Banco de la cuenta de nomina</option>
                        </select>

                    </div>
                </div>
                <div class="col-span-2 text-center">
                    <button wire:click="stepOne" class="btn bg-naranja text-white">Continuar</button>
                </div>

        </div>
    </div>
</div>
