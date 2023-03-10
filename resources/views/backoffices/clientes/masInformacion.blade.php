<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mas Información</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/Grupo 979.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">

</head>
<body>
    <!-- inicio de navbar --->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand navbar-light border shadow">
        <div class="container-fluid">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class=" col-4 col-sm-4 col-md-4 col-lg-2 offset-sm-4 offset-md-4 offset-lg-1 me-5" id="logoDI">
                        <img src="{{ asset('img/logo.png') }}"  width="120" class="my-2" alt="logo">
                    </div>
                    <div class=" col-4 col-sm-10 col-md-8 col-lg-4 offset-2 offset-sm-1 offset-md-2 offset-lg-4 mt-4">
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
                                    <a class="nav-link" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('img/backoffices/ICONO AJUSTES.svg') }}" width="20"
                                            alt="Ajustes">
                                        Ajustes
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/perfil"><img style="margin-right: 10px"
                                                    src="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}" width="20"
                                                    alt="perfil">Mi Perfil</a></li>
                                        <hr>
                                        <li><a class="dropdown-item" href="#"><img style="margin-right: 10px"
                                                    src="{{ asset('img/backoffices/ICONO_CONTACTO.svg') }}"
                                                    width="20" alt="contacto">Contacto</a></li>
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
                                            <li><a href="/perfil"><img src="{{ asset('img/backoffices/ICONO_PERFIL.svg') }}" width="15" alt="">Mi Perfil</a></li>
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


    <!--inicio de titulo-->
    <h1 class="text-center my-5">Más Información</h1>
    <!--fin de titulo-->

    <!-- inicio tabla de elementos buscados-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                        <div class="table-responsive text-center">
                            <table class="table table-bordered border-secondary"
                                id="tabla-amortizacion">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5"><p class="encabezado-tabla pt-3">Ingreso mensual reportado</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-big">¿Cuenta con un crédito hipotecario?</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">CURP</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">Fecha de nacimiento</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">Nombre de la empresa</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">Rama de la empresa</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">Telefono de Contacto</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">Correo electronico</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla">Documentacion Adjunta</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>12600</td>
                                        <td>si</td>
                                        <td>U084</td>
                                        <td>12/07/23</td>
                                        <td>Servicios Nac</td>
                                        <td>Tecnologia</td>
                                        <td>9735678923</td>
                                        <td>holita@corr</td>
                                        <td><button class="btn boton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#VerDocumento">Ver</button></td>
                                    </tr>
                                </tbody>
                            </table>
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
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 offset-lg-11 offset-md-11 offset-sm-11 offset-11">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>
          <div class="modal-body" style="border: none;">
            <h5 class="modal-title text-center" id="staticBackdropLabel" style="font-size: 35px; color:#38a937;">Documentos</h5>
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

    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-2 col-sm-8 col-md-2 col-lg-2 offset-sm-2 offset-md-6 offset-lg-8">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><img class="flechaIzq" src="{{ asset('img/backoffices/Flecha Izquierda.png') }}" alt=""> Anterior</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#">Siguiente<img class="flechaDer" src="{{ asset('img/backoffices/Flecha Derecha.png') }}" alt=""> </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de paginador-->

    <!--inicio de botones-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-10 col-lg-10 offset-sm-1 offset-md-1 offset-lg-1">
                <div class="row">
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 offset-sm-4 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                        style="background-color: #38a937; color:white; font-size: 20px;"><a href="/clientes" style="text-decoration: none; color:white;">Volver</a></button>
                    </div>
                    <div class="col-12 col-sm-8 col-md-4 col-lg-4 offset-sm-4 offset-lg-2 offset-md-2">
                        <button type="button" class="btn px-5 my-3 "
                            style="background-color: #f29100; color:white; font-size: 20px;">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--fin de botones-->

    @extends('backoffices.components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/backoffice/menuBurger.js') }}"></script>
</body>
</html>
