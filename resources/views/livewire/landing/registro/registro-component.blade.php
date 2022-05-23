<div>
    <style>
        .curp{
            color: #849374;
        }
        .curp:hover{
            color: #849374;
        }

        .bg-verde{
            background: #38A937
        }
    </style>
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
        @if ($step == 1)
            <div class="text-justify">
                Tu tienes una línea de crédito pre aprobada con nosotros, está línea de crédito se debe verificar
                por expertos, para ello te solicitaremos una serie de documentos que puedes ingresar en el
                momento de tu registro más adelante.
                <p class="texto-naranja">Llena tu regstro para continuar</p>
            </div>
        @elseif( $step == 2 )
            <p class="texto-naranja text-center">Datos para inciar sesion</p>
        @endif
    </div>
    @switch($step)
        @case(1)
            @include('livewire.landing.registro.step-1')
            @break
        @case(2)
            @include('livewire.landing.registro.step-2')
            @break
        @default

    @endswitch


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
