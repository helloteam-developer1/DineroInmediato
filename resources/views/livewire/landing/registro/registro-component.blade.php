<div>
    <div class="container md:px-36 lg:px-36 xl:px-36">
        <div class="text-center mt-5">
            <h1 class="texto-solicita-negro"><span class="text-green">Registro</span></h1>
        </div>

        <div class=" id="divProgres">
            <center>

                <ul id="progressbar" class="w-1/2">
                    <li class="{{ $step == 1 || $step == 2 || $step == 3 ? 'active texto-blanco' : 'text-dark' }}"></li>
                    <li class="{{ $step == 2 || $step == 3 ? 'active' : 'text-dark' }}"></li>
                    <li class="{{ $step == 3 ? 'active' : 'text-dark' }}"></li>
                </ul>
            </center>
        </div>
        <div class="text-justify">
                Tu tienes una línea de crédito pre aprobada con nosotros, está línea de crédito se debe verificar
                por expertos, para ello te solicitaremos una serie de documentos que puedes ingresar en el
                momento de tu registro más adelante.
                <p class="texto-naranja">Llena tu regstro para continuar</p>
        </div>
    </div>
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
                            <input wire:model="form.name" type="text" placeholder="* Nombre completo" class="border border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                        </div>

                        {{-- curp --}}
                        <div class="col-span-1 mb-4">
                            <input wire:model="form.curp" type="text" maxlength="18" min="18" placeholder="*CURP" class="uppercase border border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                        </div>


                        <div class="col-span-1 self-center text-right  mb-4">
                            <a href="https://www.gob.mx/curp/">¿No conoces tu CURP?</a>
                        </div>

                        {{-- fecha nacimiento --}}

                        <div class="col-span-1 self-center text-left  mb-4">
                            <label for="">* Fecha de nacimiento</label>
                        </div>

                        <div class="col-span-1 mb-4">
                            <input wire:model="form.fecha_nacimiento" type="date" class="{{ $errors->has('form.fecha_nacimiento') ? 'border-2 border-red-400' : 'border' }} border-solid  w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                        </div>

                        {{-- empresa donde trabajas --}}


                        <div class="col-span-2 mb-4">
                            <input wire:model="form.empresa_trabaja" placeholder="* Empresa donde trabajas" type="text" class="border border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">

                        </div>

                        {{-- antiguedad --}}

                        <div class="col-span-2 mb-4">
                            <select wire:model="form.antiguedad" class="border border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                                <option hidden value="">* Antiguedad de su trabajo actual</option>
                            </select>

                        </div>

                        <div class="col-span-2 mb-4">
                            <select wire:model="form.rama_empresa" class="border border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                                <option hidden value="">* Rama de la empresa</option>
                            </select>

                        </div>

                        <div class="col-span-2 mb-4">
                            <select wire:model="form.banco_nomina" class="border border-solid w-full p-2 rounded-md placeholder-gray-400 focus:border-indigo-400 focus:outline-none border-red-500">
                                <option hidden value="">* Banco de la cuenta de nomina</option>
                            </select>
                            @error('form.banco_nomina') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>
                    <div class="col-span-2 text-center">
                        <button wire:click="stepOne" class="btn bg-naranja text-white">Continuar</button>
                    </div>

			</div>
		</div>
	</div>
</div>

    {{-- <div class="grid grid-cols-2">
        <div class="col-span-2 text-center mt-5">
            <h1 class="texto-solicita-negro"><span class="text-green">Registro</span></h1>
        </div>

        <div class="col-span-2" id="divProgres">
            <center>

                <ul id="progressbar" class="w-1/2">
                    <li class="{{ $step == 1 || $step == 2 || $step == 3 ? 'active texto-blanco' : 'text-dark' }}"></li>
                    <li class="{{ $step == 2 || $step == 3 ? 'active' : 'text-dark' }}"></li>
                    <li class="{{ $step == 3 ? 'active' : 'text-dark' }}"></li>
                </ul>
            </center>
        </div>
        <div class="col-span-2 text-justfy">
                Tu tienes una línea de crédito pre aprobada con nosotros, está línea de crédito se debe verificar
                por expertos, para ello te solicitaremos una serie de documentos que puedes ingresar en el
                momento de tu registro más adelante.
                <p class="texto-naranja">Llena tu regstro para continuar</p>
        </div>

        <div class="col-span-2 ">
            <form action=""  class="w-1/2">
                <center>
                    <div class="">

                        <input type="text" placeholder="* Nombre completo" class="border border-solid border-gray-300 w-full p-2 rounded-md">
                    </div>
                </center>
            </form>
        </div>

        <button wire:click="previusStep">
            previus
        </button>
        <button wire:click="netxStep">
            next
        </button>
    </div> --}}



{{-- <h2 class="text-2xl font-bold texto-solicita-negro text-center"><span class="text-green">Registro</span></h2>
<div  id="divProgres">
    <center>

        <ul id="progressbar" class="w-1/2">
            <li class="{{ $step == 1 || $step == 2 || $step == 3 ? 'active texto-blanco' : 'text-dark' }}"></li>
            <li class="{{ $step == 2 || $step == 3 ? 'active' : 'text-dark' }}"></li>
            <li class="{{ $step == 3 ? 'active' : 'text-dark' }}"></li>
        </ul>
    </center>
</div>
<div>
    Tu tienes una línea de crédito pre aprobada con nosotros, está línea de crédito se debe verificar
    por expertos, para ello te solicitaremos una serie de documentos que puedes ingresar en el
    momento de tu registro más adelante.
    <p class="texto-naranja">Llena tu regstro para continuar</p>
</div>
<form action="">

    <div>
        <input type="text" placeholder="* Nombre completo" class="border border-solid border-gray-300 w-full p-2 rounded-md">
    </div>


    <select class="w-full p-3 mt-2 mb-4 w-full bg-slate-200 rounded border-2 border-slate-200 focus:border-slate-600 focus:outline-none">
        <option value="">Javascript</option>
        <option value="">Ruby</option>
        <option value="">Python</option>
        <option value="">PHP</option>
        <option value="">Java</option>
    </select>
    <div class="my-2 font-medium opacity-70">
        <input type="checkbox">
        Subscribe and follow company updates.
    </div>
    <input type="submit" class="py-3 px-6 my-2 bg-emerald-500 text-white font-medium rounded hover:bg-indigo-500 cursor-pointer ease-in-out duration-300" value="Send">
</form> --}}
