@extends('backoffices.components.navbar')
@section('navbar')
<!-- inicio de navbar --->
<nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand navbar-light border shadow">
    <div class="container-fluid">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class=" col-8 col-ms-2 col-md-6 col-lg-2  offset-4 offset-md-4 offset-lg-1">
                    <img src="{{ asset('img/logo.png') }}" width="120" class="my-2 ms-2" alt="logo">
                </div>
                <div class=" col-12 col-sm-10 col-md-6 col-lg-5 offset-sm-2 offset-md-4 mt-4">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
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
                                                width="15" alt="contacto">Contacto</a>
                                    </li>
                                
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--fin de navbar --->
@endsection
