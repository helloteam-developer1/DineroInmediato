<!-- Modal Credito en Marcha-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <button type="button" class="btn-close ms-auto mt-4 me-4" data-bs-dismiss="modal" aria-label="Close"></button>

            <div class="modal-header" style="border: none;">
                <h1 class="modal-title col-11 text-center p-medium" id="exampleModalLabel" style="color: #4A9D22; font-size: 1.8rem;">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    @switch($estado)
                        @case(1)
                            Solicitar Crédito.
                        @break
                        @case(2)
                            Solicitar crédito.
                        @break
                        @case(3)
                            Solicitud de crédito pendiente.
                        @break
                        @default
                    @endswitch
                </h1>
               
            </div>
            <div class="modal-body ms-5 me-5">
                <hr>
                @if ($estado==1)
                    <p style="color:#da8b0c; font-size:20px;">Crédito en marcha</p>
                @endif
                <p class="p-regular" style="font-size: 1.2rem; color:#474747; text-align: justify;">
                    @switch($estado)
                        @case(1)
                                Para solicitar un nuevo crédito usted debe liquidar el crédito. Anticipe pagos para
                                liquidar su préstamo actual y solicite uno nuevo.
                            @break
                        @case(2)
                                Se envíara esta solicitud al back offices del administrador para que apruebe o no dicha solicitud.
                            @break
                        @case(3)
                                Tenemos una solicitud de crédito pendiente, por favor se paciente.
                                Mantente al pendiente de la aplicación, te notificaremos por correo electrónico si tu crédito fue aprobado y qué línea de crédito te hemos otorgado.
                            @break
                        @default
                            
                    @endswitch
                </p>
            </div>
            <div class="modal-footer justify-content-center" style="border: none">
                <button class="btn btn-primary p-medium" type="button" style="background-color: #39A935; font-size: 20px; color: #FFFFFF;" data-bs-dismiss="modal">
                    Aceptar
                </button>
            </div>
        </div>
    </div>
</div>