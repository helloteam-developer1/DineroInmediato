<div class='flex items-center justify-center  from-teal-100 via-teal-300 to-teal-500 '>
    <div class='w-full max-w-lg px-10 py-8   '>
        <div class='max-w-md mx-auto space-y-6'>
                <div class="grid grid-cols-2">
                    {{-- span obligatorios --}}
                    <div class="col-span-2 mb-4 text-right">
                        <span class="text-red-600">Datos obligatorios *</span>
                    </div>
                    <input type="file" accept="image/*" capture="camera">
                    {{-- nombre --}}
                    <div class="col-span-2 mb-4">
                        <input wire:model="form.telefono" type="text" placeholder="* Telefono de contacto" class="{{ $errors->has('form.telefono') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                    </div>

                    <div class="col-span-2 mb-4">
                        <input wire:model="form.email" type="text" placeholder="* Correo electronico" class="{{ $errors->has('form.email') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                    </div>

                    <div class="col-span-2 mb-4">
                        <input wire:model="form.password" type="text" placeholder="* Contraseña" class="{{ $errors->has('form.password') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                    </div>

                    <div class="col-span-2 mb-4">
                        <input wire:model="form.confirm_password" type="text" placeholder="* Verificar contraseña" class="{{ $errors->has('form.confirm_password') ? 'border-2 border-red-400' : 'border' }} border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                    </div>

                    <div class="col-span-1  text-left">
                        <button wire:click="$set('step', 1)" class="btn bg-verde text-white">Regresar</button>
                    </div>
                    <div class="col-span-1 text-right">
                        <button wire:click="stepTwo" class="btn bg-naranja text-white">Continuar</button>
                    </div>
                </div>


        </div>
    </div>
</div>
