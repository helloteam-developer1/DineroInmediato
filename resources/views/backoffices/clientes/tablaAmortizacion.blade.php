<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Amortización</title>
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
                                                    alt="Mi perfil">Perfil</a></li>
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
    <h1 class="text-center my-5">Tabla de Amortización</h1>
    <!--fin de titulo-->

    <!-- inicio apartado de busqueda-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-5 offset-sm-2 offset-md-4 offset-lg-7">
                        <div class="input-group">
                            <div class="input-wrapper">
                                <input type="search" name="" id="" class="ms-1 mt-2" placeholder="Buscar">
                                <svg xmlns="http://www.w3.org/2000/svg" class="input-icon" style="top: 60%;" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <button type="button" class="btn boton-color px-2  ms-5 mt-2 rounded">Buscar</button>
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
                            <table class="table table-bordered border-secondary"
                                id="tabla-amortizacion">
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Núm de cre</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Núm de pago </p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Próximo pago </p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Pago a capital</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Interés ordinarios</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">IVA interés ordinario</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Comisiones</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-medio">Pago total mensual</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Agregar fila</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Editar</p></th>
                                        <th scope="col" class="px-5"><p class="encabezado-tabla-pequeño">Eliminar fila</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>0098</td>
                                        <td>2</td>
                                        <td>29/12/2022</td>
                                        <td>200</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>550</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="" class="my-3" width="40" alt=""></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>1209</td>
                                        <td>4</td>
                                        <td>29/03/2022</td>
                                        <td>600</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>120</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
                                    </tr>
                                    <tr class="table-light">
                                        <td>0023</td>
                                        <td>1</td>
                                        <td>02/03/2023</td>
                                        <td>500</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>150</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>0237</td>
                                        <td>5</td>
                                        <td>09/10/2023</td>
                                        <td>800</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>200</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
                                    </tr>
                                    <tr class="table-light">
                                        <td>0157</td>
                                        <td>3</td>
                                        <td>12/06/2023</td>
                                        <td>4000</td>
                                        <td>10%</td>
                                        <td>8%</td>
                                        <td>55</td>
                                        <td>450</td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 822.png') }}" width="50"
                                                alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/Grupo 783.png') }}" class="my-3"
                                                width="40" alt=""></td>
                                        <td><img src="{{ asset('img/backoffices/ELIMINAR.svg') }}" class="my-3"
                                                width="30" alt=""></td>
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

    <!--inicio de paginador-->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-2 col-sm-8 col-md-2 col-lg-2 offset-sm-2 offset-md-6 offset-lg-8">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span>Anterior</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" aria-label="Next" href="#">Siguiente<span aria-hidden="true">&raquo;</span></a></li>
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
