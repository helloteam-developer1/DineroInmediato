<div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                        <div class="table-responsive text-center">
                            <!--inicio tabla de solicitudes--->
                            <table class="table table-bordered border-secondary" id="tabla-Solicitud">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>Nombre
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Ocupación Profesional
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>Ingreso Mensual
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>¿Cuenta con nomina?
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>¿Cuenta con un crédito hipotecario?
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>CURP
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Fecha de Nacimiento
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Nombre de la empresa
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Ramo de la empresa
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Teléfono de contacto
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>Correo Electrónico
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Documentación
                                        </th>
                                        <th scope="col" class="px-5" colspan="3">
                                            <p class="encabezado-tabla-pequeño"></p>Acciones
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consulta as $c)
                                        <tr class="table-light">
                                            <td>{{ $c->nombre }}</td>
                                            <td>{{ $c->trabajo }}</td>
                                            <td>{{ $c->ingreso }}</td>
                                            <td>{{ $c->nomina }}</td>
                                            <td>{{ $c->credito }}</td>
                                            <td>{{ $c->curp }}</td>
                                            <td>{{ $c->fecha_nacimiento }}</td>
                                            <td>{{ $c->empresa_trabajo }}</td>
                                            <td>{{ $c->rama_empresa }}</td>
                                            <td>{{ $c->telefono_contacto }}</td>
                                            <td>{{ $c->email }}</td>
                                            <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal"
                                                    data-bs-target="#VerDocumento">Ver</button></td>
                                            <td><button class="btn boton-color boton-aceptar-solic"
                                                    data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar
                                                    Solicitud</button></td>
                                            <td><button class="btn boton-color boton-rechazar-solic"
                                                    data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar
                                                    Solicitud</button></td>
                                            <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal"
                                                    data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button>
                                            </td>
                                        </tr>

                                        @endforeach
                                    </tbody>
                            </table>
                            <!--fin tabla de solicitudes--->
                        </div>
                        {{ $consulta->links() }}
                    </div>
                </div>
            <!--inicio de modal mostrar documento-->
            <div class="modal fade" id="VerDocumento" data-bs-backdrop="static"
            data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header" style="border: none;">
                        <div
                            class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                            <button type="button" class="btn-close"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <div class="modal-body" style="border: none;">
                        <h5 class="modal-title text-center" id="staticBackdropLabel"
                            style="font-size: 35px; color:#38a937;">Documentos
                            {{ $c->nombre }}</h5>
                        <div class="container-fluid mt-5">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">
                                        <div
                                            class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                            <table
                                                class="table table-striped table-bordered border-secondary">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"
                                                            class="text-center"
                                                            style="font-size: 20px">
                                                            Documentos</th>
                                                        <th scope="col"
                                                            class="text-center"
                                                            style="font-size: 20px">
                                                            Descargable</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pt-3"
                                                            style="font-weight: bold">
                                                            INE</td>
                                                        <td><a href="#"><img
                                                                    src="{{ asset('img/backoffices/DESCARGAS.png') }}"
                                                                    width="40"
                                                                    class="ms-5"
                                                                    alt=""></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-3"
                                                            style="font-weight: bold">
                                                            CURP</td>
                                                        <td><a href="#"><img
                                                                    src="{{ asset('img/backoffices/DESCARGAS.png') }}"
                                                                    width="40"
                                                                    class="ms-5"
                                                                    alt=""></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-3"
                                                            style="font-weight: bold">
                                                            Comprobante de
                                                            domicilio</td>
                                                        <td><a href="#"><img
                                                                    src="{{ asset('img/backoffices/Grupo 444.png') }}"
                                                                    width="40"
                                                                    class="ms-5"
                                                                    alt=""></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pt-3"
                                                            style="font-weight: bold">
                                                            Estado de nómina</td>
                                                        <td><a href="#"><img
                                                                    src="{{ asset('img/backoffices/DESCARGAS.png') }}"
                                                                    width="40"
                                                                    class="ms-5"
                                                                    alt=""></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="border: none;">
                        <div class="container-fluid mt-5">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="row">
                                        <div
                                            class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                            <button type="button"
                                                class="btn px-4 my-2"
                                                style="background-color: #38a937; color:white; margin-right: 160px;"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button"
                                                class="btn px-4 my-2"
                                                style="background-color: #f29100; color:white;">Volver</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--fin de modal mostrar documento-->
            </div>
        </div>
    </div>
</div>
