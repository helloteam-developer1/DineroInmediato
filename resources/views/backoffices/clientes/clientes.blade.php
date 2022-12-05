<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clientes</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <style>
    h1{
      color: #38a937;
    }
    .boton-color{
      background-color: #38a937;
      color: white
    }
    .posision{
      float: left;
    }
    .subtitulo{
      color:#f29100;
    }
    .enlace{
      text-decoration: none;
      color: black;
    }
    .enlace:hover{
      color: #f29100;
    }
    h4{
      text-align:center;
    }
    p{
      font-weight: bold;
    }
    input[type="date"]{
      width: 90px;
      height: 40px;
      border: none;
      background-color: #ebe7e8;
    }
    input[type="search"]{
      width: 90px;
      height: 40px;
      border: none;
      background-color: #ebe7e8;
      box-sizing: border-box;
      color: #191919;
      padding: 15px 15px 15px 35px;
      width: 100%;
    }
    .input-wrapper {
      position: relative;
      width: 271px;
    }
    .input-icon {
      color: #191919;
      position: absolute;
      width: 20px;
      height: 20px;
      left: 20px;
      top: 50%;
      transform: translateY(-50%);
    }
    input[type="submit"]{
      width: 150px;
      height: 40px;
    }
    .boton-aceptar-solic{
      width: 150px;
    }
    .boton-rechazar-solic{
      width: 170px;
    }
    .boton-falta-inf{
      width: 250px;
    }
    footer{
      width: 100%;

      background-color: #f29100;
    }
    .footer-enlaces{
        width: 100%;
        font-size: 20px;
        text-decoration: none;
        color: white;
    }
    .footer-enlaces:hover{
        color: white;
    }
    textarea{
        height: 200px;
    }
    .footer-p{
      color: #617E21;
      font-size: 20px;
      font-weight: bold;
    }
  </style>
</head>
<body>
    <!-- navbar --->
    <nav class="navbar navbar-expand-lg navbar-light border shadow">
      <div class="container-fluid">
        <img src="{{ asset('img/logo.png') }}" width="120" class="my-2 mx-5" alt="logo">
        <div class=" col-sm-4 col-md-4 col-lg-5"></div>
        <div class="collapse navbar-collapse mx-5" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('img/backoffices/CLIENTES.png')}}"  width="20" alt="CLIENTES"> Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg')}}"  width="20" alt="NOTIFICACION"> Notificaciones</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('img/backoffices/ICONO AJUSTES.svg')}}"  width="20" alt="Ajustes">
                Ajustes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#"><img src="{{ asset('img/backoffices/ICONO_PERFIL.svg')}}"  width="15" alt="perfil">Perfil</a></li>
                <hr>
                <li><a class="dropdown-item" href="#"><img src="{{ asset('img/backoffices/ICONO_CONTACTO.svg')}}"  width="15" alt="contacto">Contacto</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- content principal --->
    <!-- inicio de tabla de creditos-->
    <h1 class="text-center my-5">Clientes</h1>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8  offset-lg-2">
                        <table class="table table-bordered creditos m">
                            <thead>
                              <tr>
                                <th scope="col"><img src="{{ asset('img/backoffices/SOL_APRO_NARANJA.png') }}" class="posision" width="50" alt=""><h4 class="subtitulo"><a href="#" class="enlace">Solicitudes de Crédito</a></h4></th>
                                <th scope="col"><img src="{{ asset('img/backoffices/CLI_CRE_VIG_GRIS.png') }}" class="posision" width="60" alt=""><h4 class=""><a href="#" class="enlace">Clientes Vigentes</a></h4></th>
                                <th scope="col"><img src="{{ asset('img/backoffices/CRE_FIN_GRIS.png') }}" class="posision" width="70" alt=""><h4><a href="#" class="enlace">Crédito Finalizado</a></h4></th>
                                <th scope="col"><img src="{{ asset('img/backoffices/CRE_VEN_NARANJA.png') }}" class="posision" width="60" alt=""><h4><a href="#" class="enlace">Cartera Vencida</a></h4></th>
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
                  <div class="col-12 col-sm-10 col-md-10 col-lg-8 offset-sm-1 offset-md-2 offset-lg-2">
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
                        <table class="table table-bordered border-secondary table-striped">
                          <thead>
                            <tr>
                              <th scope="col">NumerodeCuenta</th>
                              <th scope="col">Ocupacion</th>
                              <th scope="col">IngresoMensual</th>
                              <th scope="col">Cuentaconun</th>
                              <th scope="col">CURP</th>
                              <th scope="col">Fechade</th>
                              <th scope="col">Nomde</th>
                              <th scope="col">Ramo</th>
                              <th scope="col">Telefono</th>
                              <th scope="col">CorreoElectronico</th>
                              <th scope="col">Documentación</th>
                              <th scope="col">Acciones</th>
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
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--inicio de modal mostrar documento-->
    <div class="modal fade" id="VerDocumento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Documentos</h5>
            </div>
          </div>
          <div class="modal-body">
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
                                        <td><a href="#"><img src="" alt=""></a></td>
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
          <div class="modal-footer">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                                <button type="button" class="btn px-4" style="background-color: #38a937; color:white; margin-right: 165px;" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn px-4" style="background-color: #f29100; color:white;">Volver</button>
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
          <div class="modal-header">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Aprobar crédito</h5>
            </div>
          </div>
          <div class="modal-body">
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
          <div class="modal-footer">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4" style="background-color: #38a937; color:white; margin-right: 350px;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4" style="background-color: #f29100; color:white;">Guardar</button>
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
          <div class="modal-header">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">¿Estas seguro de rechazar la solicitud?</h5>
            </div>
          </div>
          <div class="modal-body">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-10 offset-md-3 offset-lg-1">
                                <form action="">
                                    <label for="" class="pb-2">Montivo de rechazo:</label>
                                    <div class="form-floating mt-3">
                                        <textarea class="form-control" style="height: 185px;" placeholder="Comentario" id=""></textarea>
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
          <div class="modal-footer">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4" style="background-color: #f29100; color:white;">Aceptar</button>
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
          <div class="modal-header">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Seleccione una Opción</h5>
            </div>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                                <button type="button" class="btn px-4" style="background-color: #38a937; color:white; margin-right: 64%;" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn px-4" style="background-color: #f29100; color:white;">Enviar</button>
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

    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2 offset-2 offset-sm-2 offset-md-2 offset-lg-8">
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

    <!-- fin tabla de elementos buscados-->

    <!--  inicio footer --->
    <footer class="mt-5">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="row">
                        {{--  inicio footer apartado informacion legal --}}
                        <div class="col-12 col-sm-12 col-md- col-lg-4">
                            <div class="container-fluid my-5 ms-5">
                                <p class="footer-p"> Información legal</p>
                                <a href="#" class="footer-enlaces mt-3">Terminos y Condiciones 20</a><br/>
                                <a href="#" class="footer-enlaces mt-4">Politica y Aviso de Privacidad</a><br/>
                                <p class="mt-4" style="font-size: 20px; font-weight: bold;">¿Te gusta la pagina?</p>
                                <img src="{{ asset('img/backoffices/Grupo 63.png') }}" width="150" class="ms-3" alt="">
                            </div>
                        </div>
                        {{--  fin footer apartado informacion legal --}}
                         {{--  inicio footer apartado Atencion al Cliente --}}
                        <div class="col-12 col-sm-12 col-md- col-lg-4">
                            <div class="container-fluid my-5 ms-5">
                                <p class="footer-p">Atencion al Cliente</p>
                                <a href="#" class="footer-enlaces">Preguntas Frecuentes</a><br/>
                                <a href="#" class="footer-enlaces">¿Quienes somos?</a><br/>
                                <a href="#" class="footer-enlaces">Acerca de nosotros</a><br/>
                                <img src="{{ asset('img/backoffices/Grupo 50.png') }}" width="45" class=" mt-4 ms-3" alt="">
                                <img src="{{ asset('img/backoffices/Grupo 48.png') }}" width="45" class="mt-4 ms-3" alt="">
                            </div>
                        </div>
                        {{--  fin footer apartado Atencion al Cliente --}}
                        {{--  inicio footer apartado Contactanos --}}
                        <div class="col-12 col-sm-12 col-md- col-lg-4">
                            <div class="container-fluid my-5">
                                <p style="font-size: 20px; font-weight: bold;">Contactanos</p>
                                <form action="">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="input-group flex-nowrap">
                                        <input type="email" class="form-control" style="color: #9ca3af;" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                                      </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                      <div class="form-floating mt-3">
                                        <textarea class="form-control" heigth="200" placeholder="Comentario" id=""></textarea>
                                        <label for="floatingTextarea">Comentario</label>
                                      </div>
                                    </div>
                                    <!--Comentado<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <input type="submit" value="Enviar">
                                    </div>-->
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md- col-lg-12">
                          <p style="text-align: center; color: white;">2022 <i style="font-weight: bold;"> Dinero Inmediato</i> | Todos los derechos reservados</p>
                        </div>
                        {{--  fin footer apartado Contactanos --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--  fin footer --->


  <!-- scripts --->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
