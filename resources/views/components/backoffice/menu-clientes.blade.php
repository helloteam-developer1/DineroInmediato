 <!-- inicio de tabla de creditos-->
 <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 table-responsive">
                    <table class="table table-bordered creditos">
                        <thead>
                            <tr>
                                <th scope="col">
                                    @if (Request::is('solicitud-clientes'))
                                        <img src="{{ asset('img/backoffices/SOL_APRO_NARANJA.png') }}"
                                        id="imgSolicitudNaranja" class="posision mt-2" width="55"
                                        alt="">
                                    @else
                                        <img
                                        src="{{ asset('img/backoffices/SOL_APRO_GRIS.png') }}"
                                        id="imgSolicitudGris" class="posision mt-2"
                                        width="55" alt="">    
                                    @endif
                                    
                                    
                                    <h4 style="margin-top: 20px;"><a href="#solicitudesCredito" class="subtitulo"
                                            id="solicitudes">Solicitudes de Crédito</a></h4>
                                </th>
                                <th scope="col">
                                    @if (Request::is('clientes-vigentes'))
                                    <img
                                        src="{{ asset('img/backoffices/CLI_CRE_VIG_NAR.png') }}"id="imgClientesNaranja"
                                       class="posision mt-1" width="60"
                                        alt="">
                                    @else
                                    <img src="{{ asset('img/backoffices/CLI_CRE_VIG_GRIS.png') }}"
                                        id="imgClientesGris" class="posision mt-1" width="60"
                                        alt="">      
                                    @endif
                                    <h4><a href="#clientesVigentes" class="enlace" id="clientes">Clientes
                                            Vigentes</a></h4>
                                </th>
                                <th scope="col">
                                    @if (Request::is('credito-finalizado'))
                                        <img src="{{ asset('img/backoffices/CRE_FIN_NAR.svg') }}"
                                        id="imgFinalizadoNaranja" class="posision mt-2"
                                        width="70" alt="">
                                    @else
                                        <img src="{{ asset('img/backoffices/CRE_FIN_GRIS.png') }}"
                                        id="imgFinalizadoGris" class="posision mt-2" width="70"
                                        alt="">
                                    @endif        
                                    <h4><a href="#creditoFinalizado" class="enlace" id="finalizado">Crédito
                                            Finalizado</a></h4>
                                </th>
                                <th scope="col">
                                    @if (Request::is('cartera-vencida'))
                                        <img src="{{ asset('img/backoffices/CAR_VEN_NAR.png') }}"
                                        id="imgCarteraNaranja" class="posision"
                                        width="60" alt="">
                                    @else
                                        <img src="{{ asset('img/backoffices/CRE_VEN_NARANJA.png') }}"
                                        id="imgCarteraGris" class="posision" width="60" alt="">
                                    @endif                            
                                    <h4><a href="#CarteraVencida" class="enlace" id="cartera">Cartera
                                            Vencida</a></h4>
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin de tabla de creditos-->