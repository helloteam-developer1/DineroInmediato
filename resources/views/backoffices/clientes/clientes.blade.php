<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Clientes</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
    h1{
      color: #38a937;
    }
  </style>
</head>
<body>
    <!-- navbar --->
    <nav class="navbar navbar-expand-lg navbar-light border shadow">
      <div class="container-fluid">
        <img src="{{ asset('img/logo.png') }}" width="120" class="my-2 mx-5" alt="logo"> 
        <div class=" col-sm-4 col-md-4 col-lg-6"></div>
        <div class="collapse navbar-collapse mx-5" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('img/backoffices/CLIENTES.png')}}"  width="20" alt="CLIENTES"> Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg')}}"  width="20" alt="NOTIFICACION"> Notificaciones</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('img/backoffices/ICONO AJUSTES.svg')}}"  width="20" alt="Ajustes"> 
                Ajustes
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#"><img src="{{ asset('img/backoffices/ICONO_PERFIL.svg')}}"  width="20" alt="perfil">Perfil</a></li>
                <li><a class="dropdown-item" href="#"><img src="{{ asset('img/backoffices/ICONO_CONTACTO.svg')}}"  width="20" alt="contacto">Contacto</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- content principal --->
    <h1 class="text-center my-4">Clientes</h1>
    <!-- footer --->

  <!-- scripts --->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>