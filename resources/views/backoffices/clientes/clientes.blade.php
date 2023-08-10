<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/Grupo 979.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">
</head>

<body>

    <!-- menu que esta en components/backoffice navbar --->
    <x-backoffice.menu-backoffice />
    

    <!-- content principal --->
    <!--inicio de titulo-->
    <h1 class="text-center my-5">Clientes</h1>
    <!--fin de titulo-->

    <!-- inicio de tabla de creditos-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2 table-responsive">
                        <table class="table table-bordered creditos">
                            <thead>
                                <tr>
                                    <th scope="col"><img src="{{ asset('img/backoffices/SOL_APRO_NARANJA.png') }}"
                                            id="imgSolicitudNaranja" class="posision mt-2" width="55"
                                            alt=""><img
                                            src="{{ asset('img/backoffices/SOL_APRO_GRIS.png') }}"
                                            id="imgSolicitudGris" style="display: none" class="posision mt-2"
                                            width="55" alt="">
                                        <h4 style="margin-top: 20px;"><a href="#solicitudesCredito" class="subtitulo"
                                                id="solicitudes">Solicitudes de Crédito</a></h4>
                                    </th>
                                    <th scope="col"><img src="{{ asset('img/backoffices/CLI_CRE_VIG_GRIS.png') }}"
                                            id="imgClientesGris" class="posision mt-1" width="60"
                                            alt=""><img
                                            src="{{ asset('img/backoffices/CLI_CRE_VIG_NAR.png') }}"id="imgClientesNaranja"
                                            style="display: none" class="posision mt-1" width="60"
                                            alt="">
                                        <h4><a href="#clientesVigentes" class="enlace" id="clientes">Clientes
                                                Vigentes</a></h4>
                                    </th>
                                    <th scope="col"><img src="{{ asset('img/backoffices/CRE_FIN_GRIS.png') }}"
                                            id="imgFinalizadoGris" class="posision mt-2" width="70"
                                            alt=""><img src="{{ asset('img/backoffices/CRE_FIN_NAR.svg') }}"
                                            id="imgFinalizadoNaranja" style="display: none" class="posision mt-2"
                                            width="70" alt="">
                                        <h4><a href="#creditoFinalizado" class="enlace" id="finalizado">Crédito
                                                Finalizado</a></h4>
                                    </th>
                                    <th scope="col"><img src="{{ asset('img/backoffices/CRE_VEN_NARANJA.png') }}"
                                            id="imgCarteraGris" class="posision" width="60" alt=""><img
                                            src="{{ asset('img/backoffices/CAR_VEN_NAR.png') }}"
                                            id="imgCarteraNaranja" style="display: none;" class="posision"
                                            width="60" alt="">
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

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-8 col-sm-10 col-md-10 col-lg-8 offset-2 offset-sm-1 offset-md-2 offset-lg-2">
                        <div class="input-group">
                            <p class="my-2 mx-2">De</p> <input type="date" class="mx-3" placeholder=""> <img
                                src="{{ asset('img/backoffices/CALENDARIO.PNG') }}" class="my-2 mx-2" width="30"
                                height="30" alt="">
                            <p class="mx-3 my-2">a</p> <input type="date" class="mx-3" placeholder=""><img
                                src="{{ asset('img/backoffices/CALENDARIO.PNG') }}" class="my-2 mx-2" width="30"
                                height="30" alt="">
                            <div class="input-wrapper">
                                <input type="search" name="" id="" class="ms-1"
                                    placeholder="Buscar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <button type="button" class="btn boton-color px-2 ms-4 rounded">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin apartado de busqueda-->

    <!-- inicio tabla de elementos buscados-->
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
                                            <p class="encabezado-tabla-medio"></p>Número de Cuenta
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Ocupación
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>Ingreso Mensual
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>Cuenta con un
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>CURP
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Fecha de
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Nom de
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Ramo
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño"></p>Teléfono
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio"></p>Correo Electronico
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
                                    <tr class="table-light">
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal"
                                                data-bs-target="#VerDocumento">Ver</button></td>
                                        <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal"
                                                data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                        <td><button class="btn boton-color boton-rechazar-solic"
                                                data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar
                                                Solicitud</button></td>
                                        <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal"
                                                data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--fin tabla de solicitudes--->
                            <!--inicio tabla de clientes--->
                            <table class="table  table-bordered border-secondary" id="tabla-Clientes">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Número de Crédito</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Número de Cliente</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-pequeño">Nombre</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">linea de Crédito Aut</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Tarjeta de Nóm Reg</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Tabla de Amortización</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Núm Parcilidades</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Tabla de Pago</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Número de Pago</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla">Enviar Cartera Vencida</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Más Información</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Finalizar Crédito</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>123890</td>
                                        <td>NC989862</td>
                                        <td>Alberto Ledezm</td>
                                        <td>1200</td>
                                        <td>si</td>
                                        <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion"
                                                    style="text-decoration: none; color:white;">Ver</a></button></td>
                                        <td>2 pagos</td>
                                        <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos"
                                                    style="text-decoration: none; color:white;">Ver</a></button></td>
                                        <td>4 pagos</td>
                                        <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal"
                                                data-bs-target="#carteraVencida">Enviar</button></td>
                                        <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion"
                                                    style="text-decoration: none; color:white;">Ver</a></button></td>
                                        <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal"
                                                data-bs-target="#finalizarCredito">Finalizar</button></td>
                                    </tr>
                               
                                </tbody>
                            </table>
                            <!--fin tabla de clientes--->
                            <!-- inicio tabla finalizar credito-->
                            <table class="table  table-bordered border-secondary" id="tabla-Finalizado">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Nombre</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Núm de crédito</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Crédito Activo</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Historial de pago</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla">Historial de montos Auto</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>Nombre Apellidos</td>
                                        <td>2</td>
                                        <td>Vigente</td>
                                        <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos"
                                                    style="text-decoration: none; color:white;">Ver</a></button></td>
                                        <td><button class="btn boton-color px-4 mx-4"><a
                                                    href="/historialMontosAutorizados"
                                                    style="text-decoration: none; color:white;">Ver montos</a></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- fin tabla finalizar credito-->
                            <!--inicio tabla de cartera--->
                            <table class="table table-bordered border-secondary" id="tabla-Cartera">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Número de cliente</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Núm de crédito</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Nombre</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Teléfono</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Correo Electronico</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Regularizar cliente</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Tabla de pagos</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td><button class="btn buton-color px-4 mx-4" data-bs-toggle="modal"
                                                data-bs-target="#regularizarCliente">Regurizar</button></td>
                                        <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos"
                                                    style="text-decoration: none; color:white;">Ver</a></button></td>
                                    </tr>
                                
                                </tbody>
                            </table>
                            <!--fin tabla de cartera--->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin tabla de elementos buscados-->

    <!--inicio de modal mostrar documento-->
    <div class="modal fade" id="VerDocumento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Documentos</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                        <table class="table table-striped table-bordered border-secondary">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" style="font-size: 20px">
                                                        Documentos</th>
                                                    <th scope="col" class="text-center" style="font-size: 20px">
                                                        Descargable</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="pt-3" style="font-weight: bold">INE</td>
                                                    <td><a href="#"><img
                                                                src="{{ asset('img/backoffices/DESCARGAS.png') }}"
                                                                width="40" class="ms-5" alt=""></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-3" style="font-weight: bold">CURP</td>
                                                    <td><a href="#"><img
                                                                src="{{ asset('img/backoffices/DESCARGAS.png') }}"
                                                                width="40" class="ms-5" alt=""></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-3" style="font-weight: bold">Comprobante de
                                                        domicilio</td>
                                                    <td><a href="#"><img
                                                                src="{{ asset('img/backoffices/Grupo 444.png') }}"
                                                                width="40" class="ms-5" alt=""></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-3" style="font-weight: bold">Estado de nómina</td>
                                                    <td><a href="#"><img
                                                                src="{{ asset('img/backoffices/DESCARGAS.png') }}"
                                                                width="40" class="ms-5" alt=""></a>
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
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 160px;"
                                            data-bs-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn px-4 my-2"
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

    <!--inicio de modal mostrar Aceptar solicitud-->
    <div class="modal fade" id="AceptarSolicitud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Aprobar crédito</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                        <form action="">
                                            <label for="" class="pb-2">Monto de crédito aprobado</label>
                                            <input type="number" name="number" id=""
                                                class="form-control mb-4" placeholder="$2500">
                                            <label for="" class="pb-2">Confirmado de crédito
                                                aprobado</label>
                                            <input type="number" name="" id="" class="form-control"
                                                placeholder="$2500">
                                        </form>
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
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 350px;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #f29100; color:white;">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de modal mostrar Aceptar solicitud-->

    <!--inicio de modal mostrar Recharzar solicitud-->
    <div class="modal fade" id="RechazarSolicitud" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">¿Estas seguro de rechazar la solicitud?</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <form action="">
                                            <label for="" class="pb-2">Motivo de rechazo:</label>
                                            <div class="form-floating mt-3">
                                                <textarea class="form-control footer-textarea" style="height: 185px;" placeholder="Comentario" maxlength="300"></textarea>
                                                <label for="floatingTextarea">Escribe mensaje</label>
                                                <div
                                                    class="col-3 col-sm-3 col-md-3 col-lg-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9">
                                                    <p class="text-secondary">0/300 Caracteres</p>
                                                </div>
                                            </div>
                                        </form>
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
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <button type="button" class="btn px-4 py-2 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 63%;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 py-2 my-2"
                                            style="background-color: #f29100; color:white;">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de modal mostrar rechazar solicitud-->

    <!--inicio de modal mostrar Falta informacion-->
    <div class="modal fade" id="FaltaInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Seleccione una Opción</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <form action="">
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Documento Inválido o información incorrecta, favor de volver a
                                                    subir.
                                                </label>
                                            </div>
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Documento incompleta: falta documentación por subir.
                                                </label>
                                            </div>
                                            <div class="form-check my-4">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Otro.
                                                </label>
                                            </div>
                                            <div class="form-floating mt-3">
                                                <textarea class="form-control footer-textarea" style="height: 160px;" placeholder="Comentario" maxlength="300"></textarea>
                                                <label for="floatingTextarea">Escribe mensaje</label>
                                                <div
                                                    class="col-3 col-sm-3 col-md-3 col-lg-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9">
                                                    <p class="text-secondary">0/300 Caracteres</p>
                                                </div>
                                            </div>
                                        </form>
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
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 64%;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #f29100; color:white;">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de modal mostrar Falta Informacion-->

    <!--Inicio de modal mostrar cartera vencida -->
    <div class="modal fade" id="carteraVencida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Confirmación</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <p class="text-secondary">¿Estás seguro de querer enviar al cliente a cartera
                                            vencida? Esta acción no se
                                            podrá deshacer.</p>
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
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 64%;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #f29100; color:white;">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Fin de modal mostrar cartera vencida -->

    <!--inicio modal Finalizar credito-->
    <div class="modal fade" id="finalizarCredito" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">¿Está seguro de finalizar el crédito del clientes?
                    </h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <p class="text-secondary">Al dar clic en el botón aceptar. El cliente pasará a
                                            créditos finalizados esta
                                            acción no se puede deshacer</p>
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
                                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 64%;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #f29100; color:white;">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin modal Finalizar credito-->

    <!--inicio de modal regularizar cliente-->
    <div class="modal fade" id="regularizarCliente" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body" style="border: none;">
                    <h5 class="modal-title text-center" id="staticBackdropLabel"
                        style="font-size: 35px; color:#38a937;">Regularizar Cliente</h5>
                    <div class="container-fluid mt-5">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                        <p class="text-secondary fs-5" style="text-align: justify;">Este apartado
                                            sirve para regresar al cliente a un estado de regularización de
                                            crédito. Si el cliente ya ha cumplido o ha regularizado su crédito, haga
                                            clic en
                                            este haga clic en el botón aceptar para regresarlo a la tabla de clientes
                                            aceptados, de lo contrario de clic en el botón cancelar.</p>
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
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-8 offset-md-3 offset-lg-2">
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #38a937; color:white; margin-right: 260px;"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn px-4 my-2"
                                            style="background-color: #f29100; color:white;">Aceptar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--fin de modal regularizar cliente-->

    
    @extends('backoffices.components.footer')


    <!-- scripts --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/backoffice/clientes.js') }}"></script>
    <script src="{{ asset('js/backoffice/menuBurger.js') }}"></script>
    <script></script>

</body>

</html>
