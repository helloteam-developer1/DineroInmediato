<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mi perfil</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">

</head>
<body>
    <!-- inicio de navbar --->
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-expand navbar-light border shadow">
        <div class="container-fluid">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class=" col-8 col-ms-2 col-md-6 col-lg-2  offset-4 offset-md-4 offset-lg-1">
                        <img src="{{ asset('img/logo.png') }}" width="120" class="my-2 ms-2" alt="logo">
                    </div>
                    <div class=" col-12 col-sm-10 col-md-6 col-lg-4 offset-sm-2 offset-md-4 mt-4">
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/clientes" style="color: #38a937;"><img
                                            src="{{ asset('img/backoffices/CLIENTES.png') }}" width="20"
                                            alt="CLIENTES"> Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/notificaciones"><img
                                            src="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg') }}" width="20"
                                            alt="NOTIFICACION"> Notificaciones</a>
                                </li>
                                <li class="nav-item dropdown">
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
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!--fin de navbar --->

  <!--inicio de titulo-->
  <h1 class="text-center my-5">Mi pérfil</h1>
  <!--fin de titulo-->

  <div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-10 col-sm-8 col-md-8 col-lg-6 offset-1 offset-sm-2 offset-md-2 offset-lg-3">
                    <form id="cambioContraseña">
                        <div class="col-10 col-sm-10 col-md-8 col-lg-6 offset-1 offset-sm-1 offset-md-2 offset-lg-3">
                            <div class="mb-5">
                                <label for="exampleInputEmail1" class="form-label">Nombre de usuario</label>
                                <input type="text" class="form-control fw-light mb-5" value="Juan Marín Gonzales">
                            </div>
                        </div>
                        <div class="col-10 col-sm-8 col-md-8 col-lg-4 offset-1 offset-sm-2 offset-md-2 offset-lg-4">
                            <button class="btn my-5  px-5" id="botonCambioContraseña" style="background-color: #38a937; color:white; width: 250px;">Cambiar contraseña</button>
                        </div>
                    </form>
                    <form id="nuevaContraseña">
                        <div class="col-10 col-sm-10 col-md-8 col-lg-6 offset-1 offset-sm-1 offset-md-2 offset-lg-3">
                            <div class="mb-5">
                                <input type="text" class="form-control fw-light mb-5" placeholder="Nombre de usuario" required>
                            </div>
                            <div class="mb-5">
                                <input type="text" class="form-control fw-light mb-5" placeholder="Contraseña actual" required>
                            </div>
                            <div class="mb-5">
                                <input type="text" class="form-control fw-light mb-5" placeholder="Nueva contraseña" required>
                            </div>
                            <div class="mb-5">
                                <input type="text" class="form-control fw-light mb-5" placeholder="Verifique su nueva contraseña" required>
                            </div>
                        </div>
                        <div class="col-10 col-sm-10 col-md-8 col-lg-4 offset-1 offset-sm-1 offset-md-2 offset-lg-4">
                            <button type="submit" class="btn mt-2 mb-5 mx-5 px-5" style="background-color: #38a937; color:white;">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  @extends('backoffices.components.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/backoffice/perfil.js') }}"></script>
</body>
</html>
