<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img
          src="{{ asset('img/assets/aplicacionCliente/Grupo 24.png')}}"
          width="150"
          class=""
          style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px;"
      />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 100px;">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('miPrestamo') }}">
              <img class="m-1"  src="{{ asset('img/assets/aplicacionCliente/Grupo 946.png')}}" alt="">
              <!-- <img class="ms-3 me-2"  src="img/Grupo 946.png" alt=""> -->
              &nbsp;Mi préstamo
          </a>
        </li>

        <li class="nav-item" style="position: relative;">
          <a class="nav-link active" aria-current="page" href="{{ route('cliente-notificaciones') }}">
            <div class="notify">
                <img class="bx m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 262.png')}}" alt="">
                &nbsp;&nbsp;&nbsp;Notificaciones
            </div>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('soli-nueva') }}">
              <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 264.png')}}" alt="">
              Solicitud de nuevo crédito
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('cliente-docu-infor') }}">
              <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/ICONO_DOC E INF_ GRIS.svg')}}" alt="">
              &nbsp;&nbsp;&nbsp;Documentación e información
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="m-1" src="{{ asset('img/assets/aplicacionCliente/Grupo 397.png')}}" alt="">
              &nbsp;&nbsp;Ajustes
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
              <a class="dropdown-item" href="{{ route('miperfil') }}">
                  <img class="me-2" src="{{ asset('img/assets/aplicacionCliente/Grupo 947.png')}}" alt="">
                  Mi perfil
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="{{ route('contacto') }}">
                  <img class="me-2" src="{{ asset('img/assets/aplicacionCliente/Grupo 950.png')}}" alt="">
                  Contacto
              </a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="#">
                  <img class="me-2" src="{{ asset('img/assets/aplicacionCliente/Grupo 948.png')}}" alt=""> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

