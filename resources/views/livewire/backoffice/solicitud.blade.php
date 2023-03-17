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
                                            <td>
                                               @livewire('backoffice.documentos', ['user' => $c], key($c->id))
                                            </td>
                                            <td>
                                                <button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button>
                                            </td>
                                            <td>
                                                <button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button>
                                            </td>
                                            <td>
                                                <button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table>
                            <!--fin tabla de solicitudes--->
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
