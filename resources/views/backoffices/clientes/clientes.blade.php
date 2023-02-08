<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clientes</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">
</head>
<body>

    <!-- inicio de navbar --->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand navbar-light border shadow">
        <div class="container-fluid">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class=" col-4 col-sm-4 col-md-4 col-lg-2 offset-sm-4 offset-md-4 offset-lg-1" id="logoDI">
                        <img src="{{ asset('img/logo.png') }}"  width="120" class="my-2 ms-2" alt="logo">
                    </div>
                    <div class=" col-4 col-sm-10 col-md-8 col-lg-4 offset-4 offset-sm-1 offset-md-2 offset-lg-4 mt-4">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav navDestop">
                                <li class="nav-item ms-4">
                                    <a class="nav-link" href="/clientes" style="color: #38a937;"><img
                                            src="{{ asset('img/backoffices/CLIENTES.png') }}" width="20"
                                            alt="CLIENTES"> Clientes</a>
                                </li>
                                <li class="nav-item ms-4">
                                    <a class="nav-link" href="/notificaciones"><img
                                            src="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg') }}" width="20"
                                            alt="NOTIFICACION"> Notificaciones</a>
                                </li>
                                <li class="nav-item dropdown ms-4">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('img/backoffices/ICONO AJUSTES.svg') }}" width="20"
                                            alt="Ajustes">
                                        Ajustes
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/perfil"><img
                                                    src="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}" width="15"
                                                    alt="perfil">Perfil</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#"><img
                                                    src="{{ asset('img/backoffices/ICONO_CONTACTO.svg') }}"
                                                    width="15" alt="contacto">Contacto</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- inicio menu burger -->
                        <div class="container">
                            <div class="MeinBurger navMovil">
                                <div class="burger">
                                    <button>
                                        <span class="top-line"></span>
                                        <span class="middle-line"></span>
                                        <span class="botton-line"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="Menu close">
                            <div class="enlaces">
                                <ul>
                                    <li><a href="/clientes" style="color: #38a937;"><img src="{{ asset('img/backoffices/CLIENTES.png') }}" width="15" alt=""> Clientes</a></li>
                                    <li><a href="/notificaciones"><img src="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg') }}" width="15" alt="">Notificaciones</a></li>
                                    <li>
                                        <a href="#"><img src="{{ asset('img/backoffices/ICONO AJUSTES.svg') }}" width="15" alt="">Ajustes</a>
                                        <ul>
                                            <li><a href="/perfil"><img src="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}" width="15" alt="">Perfil</a></li>
                                            <li><a href=""><img src="{{ asset('img/backoffices/ICONO_CONTACTO.svg') }}" width="15" alt="">Contacto</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- fin menu burger -->
                </div>
            </div>
        </div>
    </nav>
    <!--fin de navbar --->

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
                                    <th scope="col"><img src="{{ asset('img/backoffices/SOL_APRO_NARANJA.png') }}" id="imgSolicitudNaranja" class="posision" width="60" alt=""><img src="{{ asset('img/backoffices/SOL_APRO_GRIS.png') }}" id="imgSolicitudGris" style="display: none" class="posision" width="60" alt=""><h4><a href="#solicitudesCredito" class="subtitulo" id="solicitudes" >Solicitudes de Crédito</a></h4></th>
                                    <th scope="col"><img src="{{ asset('img/backoffices/CLI_CRE_VIG_GRIS.png') }}" id="imgClientesGris" class="posision" width="60" alt=""><img src="{{ asset('img/backoffices/CLI_CRE_VIG_NAR.png') }}"id="imgClientesNaranja" style="display: none" class="posision" width="60" alt=""><h4><a href="#clientesVigentes" class="enlace" id="clientes">Clientes Vigentes</a></h4></th>
                                    <th scope="col"><img src="{{ asset('img/backoffices/CRE_FIN_GRIS.png') }}" id="imgFinalizadoGris" class="posision" width="60" alt=""><img src="{{ asset('img/backoffices/CRE_FIN_NAR.svg') }}" id="imgFinalizadoNaranja"  style="display: none" class="posision" width="60" alt=""><h4><a href="#creditoFinalizado" class="enlace" id="finalizado">Crédito Finalizado</a></h4></th>
                                    <th scope="col"><img src="{{ asset('img/backoffices/CRE_VEN_NARANJA.png') }}" id="imgCarteraGris" class="posision" width="60" alt=""><img src="{{ asset('img/backoffices/CAR_VEN_NAR.png') }}" id="imgCarteraNaranja" style="display: none;" class="posision" width="60" alt=""><h4><a href="#CarteraVencida" class="enlace" id="cartera">Cartera Vencida</a></h4></th>
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
                      <p class="my-2 mx-2">De</p> <input type="date" class="mx-3" placeholder=""> <img src="{{ asset('img/backoffices/CALENDARIO.PNG') }}"class="my-2 mx-2" width="30" height="30" alt="">
                      <p class="mx-3 my-2">a</p> <input type="date" class="mx-3" placeholder=""><img src="{{ asset('img/backoffices/CALENDARIO.PNG') }}" class="my-2 mx-2" width="30" height="30" alt="">
                      <div class="input-wrapper">
                        <input type="search" name="" id="" class="ms-1" placeholder="Buscar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <input type="submit" value="Buscar" class="btn boton-color px-2 ms-4">
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
                        <table class="table table-bordered border-secondary table-light table-striped" id="tabla-Solicitud">
                          <thead>
                            <tr>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Numero de Cuenta</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Ocupación</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Ingreso Mensual</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Cuenta con un</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>CURP</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Fecha de</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Nom de</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Ramo</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Telefono</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio"></p>Correo Electronico</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Documentación</th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño"></p>Acciones</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                              <tr>
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
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                <td><button class="btn boton-color boton-aceptar-solic" data-bs-toggle="modal" data-bs-target="#AceptarSolicitud">Aceptar Solicitud</button></td>
                                <td><button class="btn boton-color boton-rechazar-solic" data-bs-toggle="modal" data-bs-target="#RechazarSolicitud">Rechazar Solicitud</button></td>
                                <td><button class="btn boton-color boton-falta-inf" data-bs-toggle="modal" data-bs-target="#FaltaInfo">Falta inf por com. o es inc.</button></td>
                              </tr>
                            </tbody>
                        </table>
                        <!--fin tabla de solicitudes--->
                        <!--inicio tabla de clientes--->
                        <table class="table  table-bordered border-secondary table-light table-striped" id="tabla-Clientes">
                            <thead>
                              <tr>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de Crédito</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de Cliente</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Nombre</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">linea de Crédito Aut</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tarjeta de Nóm Reg</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tabla de Amortización</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Num Parcilidades</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tabla de Pago</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de Pago</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla">Enviar Cartera Vencida</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Mas Información</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Finalizar Crédito</p></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>123890</td>
                                <td>NC989862</td>
                                <td>Alberto Ledezm</td>
                                <td>1200</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>2 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>123567</td>
                                <td>NC967457</td>
                                <td>Jóse Garcia Hern</td>
                                <td>800</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>3 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>6pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>134780</td>
                                <td>NC567834</td>
                                <td>Danna Peña Mar</td>
                                <td>2500</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>3 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>6pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>09897</td>
                                <td>NC234569</td>
                                <td>Ivan Segura Rico</td>
                                <td>300</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>1 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>00457</td>
                                <td>NC092345</td>
                                <td>Adrian Uribe Sos</td>
                                <td>1200</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>6 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>14590</td>
                                <td>NC125678</td>
                                <td>Pedro Sierra Flor</td>
                                <td>1500</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>2 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>00089</td>
                                <td>NC234569</td>
                                <td>Susana Gutiérrez</td>
                                <td>Datos</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>8 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>9 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>07584</td>
                                <td>NC673456</td>
                                <td>Roberto Villagón</td>
                                <td>700</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>7 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>8 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                              <tr>
                                <td>02342</td>
                                <td>NC19802</td>
                                <td>Luis Gómez Loi</td>
                                <td>3000</td>
                                <td>si</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaAmortizacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>2 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td>4 pagos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#carteraVencida">Enviar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/masInformacion" style="text-decoration: none; color:white;">Ver</a></button></td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#finalizarCredito">Finalizar</button></td>
                              </tr>
                            </tbody>
                        </table>
                        <!--fin tabla de clientes--->
                        <!-- inicio tabla finalizar credito-->
                        <table class="table  table-bordered border-secondary table-light table-striped" id="tabla-Finalizado">
                            <thead>
                              <tr>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Nombre</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Num de crédito</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Crédito Activo</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Historial de pago</p></th>
                                <th scope="col" class="px-5"><p class="encabezado-tabla">Historial de montos Auto</p></th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>2</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>3</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>2</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>3</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Vigente</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>1</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                                <tr>
                                    <td>Nombre Apellidos</td>
                                    <td>2</td>
                                    <td>Inactivo</td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialPagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                                    <td><button class="btn boton-color px-4 mx-4"><a href="/historialMontosAutorizados" style="text-decoration: none; color:white;">Ver montos</a></button></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- fin tabla finalizar credito-->
                        <!--inicio tabla de cartera--->
                        <table class="table table-bordered border-secondary table-light table-striped" id="tabla-Cartera">
                          <thead>
                            <tr>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Numero de cliente</p></th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Num de crédito</p></th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Nombre</p></th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Telefono</p></th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Correo Electronico</p></th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Regularizar cliente</p></th>
                              <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Tabla de pagos</p></th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
                              </tr>
                              <tr>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td>Datos</td>
                                <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">Regurizar</button></td>
                                <td><button class="btn boton-color px-4 mx-4"><a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a></button></td>
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
    <div class="modal fade" id="VerDocumento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Documentos</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                <table class="table table-striped table-bordered border-secondary">
                                    <thead>
                                      <tr>
                                        <th scope="col" class="text-center" style="font-size: 20px">Documentos</th>
                                        <th scope="col" class="text-center" style="font-size: 20px">Descargable</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">INE</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/DESCARGAS.png') }}" width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">CURP</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/DESCARGAS.png') }}"  width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">Comprobante de domicilio</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/Grupo 444.png') }}"  width="40" class="ms-5" alt=""></a></td>
                                      </tr>
                                      <tr>
                                        <td class="pt-3" style="font-weight: bold">Estado de nómina</td>
                                        <td><a href="#"><img src="{{ asset('img/backoffices/DESCARGAS.png') }}"  width="40" class="ms-5" alt=""></a></td>
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
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 160px;" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Volver</button>
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
    <div class="modal fade" id="AceptarSolicitud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Aprobar crédito</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                <form action="">
                                    <label for="" class="pb-2">Monto de crédito aprobado</label>
                                    <input type="number" name="number" id="" class="form-control mb-4" placeholder="$2500">
                                    <label for="" class="pb-2">Confirmado de crédito aprobado</label>
                                    <input type="number" name="" id="" class="form-control" placeholder="$2500">
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
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 350px;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Guardar</button>
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
    <div class="modal fade" id="RechazarSolicitud" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">¿Estas seguro de rechazar la solicitud?</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
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
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9">
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
                                <button type="button" class="btn px-4 py-2 my-2" style="background-color: #38a937; color:white; margin-right: 63%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 py-2 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
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
    <div class="modal fade" id="FaltaInfo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Seleccione una Opción</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                              <form action="">
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Documento Inválido o información incorrecta, favor de volver a subir.
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Documento incompleta: falta documentación por subir.
                                        </label>
                                    </div>
                                    <div class="form-check my-4">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Otro.
                                        </label>
                                    </div>
                                    <div class="form-floating mt-3">
                                        <textarea class="form-control footer-textarea" style="height: 160px;" placeholder="Comentario" maxlength="300"></textarea>
                                        <label for="floatingTextarea">Escribe mensaje</label>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9">
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
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Enviar</button>
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
    <div class="modal fade" id="carteraVencida" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Confirmación</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
              <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                            <p class="text-secondary">¿Estás seguro de querer enviar al cliente a cartera vencida? Esta acción no se
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
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
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
    <div class="modal fade" id="finalizarCredito" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="border: none;">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">¿Está seguro de finalizar el crédito del clientes?</h5>
              </div>
            </div>
            <div class="modal-body" style="border: none;">
              <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                              <p class="text-secondary">Al dar clic en el botón aceptar. El cliente pasará a créditos finalizados esta
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
                                  <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                  <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
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
    <div class="modal fade" id="regularizarCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="border: none;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Regularizar Cliente</h5>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                              <p class="text-secondary fs-5" style="text-align: justify;">Este apartado sirve para regresar al cliente a un estado de regularización de
                                crédito. Si el cliente ya ha cumplido o ha regularizado su crédito, haga clic en
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
                                <button type="button" class="btn px-4 my-2" style="background-color: #38a937; color:white; margin-right: 260px;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4 my-2" style="background-color: #f29100; color:white;">Aceptar</button>
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

    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-12 col-sm-8 col-md-8 col-lg-2 offset-sm-2 offset-md-2 offset-lg-8">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link text-dark" href="#">Anterior</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">4</a></li>
                        <li class="page-item"><a class="page-link text-dark" href="#">Siguientes</a></li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de paginador-->


    @extends('backoffices.components.footer')


  <!-- scripts --->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/backoffice/clientes.js') }}"></script>
  <script src="{{ asset('js/backoffice/menuBurger.js') }}"></script>

</body>
</html>
