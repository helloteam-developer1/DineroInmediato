<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img
            
            width="150"
            class=""
            style="margin-left: 20px; margin-top: 20px; margin-bottom: 20px;"
        />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class=" col-sm-4 col-md-4 col-lg-6"></div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 100px;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('clientes') }}">
                <img class="m-1"  src="{{ asset('img/assets/backoffices/CLIENTES.png')}}" alt="">
                <!-- <img class="ms-3 me-2"  src="img/Grupo 946.png" alt=""> -->
                &nbsp;Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="">
                <img class="m-1" src="{{ asset('img/assets/backoffices/ICONO_NOTIFICACIONES.SVG')}}" alt=""> 
                &nbsp;&nbsp;&nbsp;Notificaciones
            </a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="m-1" src="{{ asset('img/assets/backoffices/ICONO AJUSTES.svg')}}" alt=""> 
                &nbsp;&nbsp;Ajustes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="">
                    <img class="me-2" src="{{ asset('img/assets/backoffices/ICONO_PERFIL.svg')}}" alt=""> 
                    Mi perfil
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="">
                    <img class="me-2" src="{{ asset('img/assets/backoffices/ICONO_CONTACTO.svg')}}" alt=""> 
                    Contacto
                </a>
              </li>
              
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>