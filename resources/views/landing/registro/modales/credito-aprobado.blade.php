<div class="hidden grid grid-cols-2 credito-aprobado fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 sm:w-11/12 md:w-2/5 lg:w-2/5 xl:w-2/5   mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="grid grid-cols-12 pb-3">
                <div class="col-span-11 text-center">
                    <p class="text-2xl font-bold texto-verde">Cr&eacute;dito aprobado</p>
                </div>

                <div class="modal-close cursor-pointer z-50 col-span-1 text-center justify-self-end" onclick="modalClose('credito-aprobado')">
                    <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="col-span-2 mr-5 ml-5 flex justify-center">
                <span class="texto-naranja">Felicidades</span>
            </div>
            <div class="col-span-2 text-center mt-4 text-dark">
                Tenemos pre aprobada una linea de cr&eacute;dito para ti. Si quieres hacer uso
                de ella, contin&uacute;a el proceso y te indicaremos q&uacute;e hacer.

            </div>
            <!--Footer-->
            <div class="col-span-2 grid grid-cols-2 gap-2 mt-4">

                <div class="col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 text-center ">
                    <button
                    id="showModalAbandonarLinea"
                    class="focus:outline-none modal-close w-full bg-verde px-4 p-2 text-white text-sm"
                    onclick="modalClose('credito-aprobado')">En otro momento</button>
                </div>
                <div class="col-span-2 sm:col-span-2 md:col-span-2 lg:col-span-1 xl:col-span-1 text-center ">

                        <button
                        class="focus:outline-none modal-close w-full bg-naranja px-2 py-2 text-white text-sm">Si, quiero hacer uso de mi l&iacute;nea de cr&eacute;dito</button>

                </div>
            </div>
        </div>
    </div>
</div>
