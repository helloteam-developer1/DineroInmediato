<div class="hidden grid grid-cols-2 abandonar-linea fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
style="background: rgba(0,0,0,.7);">
<div
    class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 sm:w-11/12 md:w-2/5 lg:w-2/5 xl:w-2/5   mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="grid grid-cols-12 pb-3">
            <div class="col-span-11 text-center">
                <p class="text-2xl font-bold texto-verde">¿Est&aacute;s seguro de que quieres abandonar tu linea de Cr&eacute;dito pre aprobada?</p>
            </div>

            <div class="modal-close cursor-pointer z-50 col-span-1 text-center justify-self-end" onclick="modalClose('abandonar-linea')">
                <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                    viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
        </div>
        <!--Body-->

        <div class="col-span-2 text-center mt-4 text-dark">
            Recuerda que de ser as&iacute;, en cualquer momento podr&aacute;s regresar a la
            aplicaci&oacute;n y hacer uso de tu linea de cr&eacute;dito, en DINERO INMEDIATO estamos
            para ayudarte a cumplir tus sueños

        </div>
        <!--Footer-->
        <div class="col-span-2 grid grid-cols-2 gap-2 mt-4">

            <div class="col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 text-center  ">
                <button
                id="showModalAbandonarLinea"
                class="focus:outline-none modal-close w-full bg-verde px-4 p-2 text-white text-sm"
                onclick="modalClose('abandonar-linea')">Regresaré en otro momento</button>
            </div>
            <div class="col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 text-center  ">

                    <button
                    class="focus:outline-none modal-close w-full bg-naranja px-2 py-2 text-white text-sm">Quiero continuar para obtener l&iacute;nea de cr&eacute;dito</button>

            </div>
        </div>
    </div>
</div>
</div>
