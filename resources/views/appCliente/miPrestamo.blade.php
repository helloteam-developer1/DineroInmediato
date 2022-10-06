<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Dinero Inmediato</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/Grupo 946.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b34d6606d6.js" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backoffice/style.css') }}" rel="stylesheet">
    @stack('css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
    @livewireScripts

    <style>
        .solicita:hover{
            background: #da8b0c !important;

            color: white;

        }
        .solicita{
            background: #f5a82d !important;
            color: white;
        }
        .btn-verde:{
            background: #38A937
        }
        .btn-verde:hover{
            color: #e0fc70;
        }

    </style>
</head>

<body >
    
{{--Menú Cliente--}}
@include('components.landing.cuerpo._menuCliente')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img
            src="img/Grupo 24.png"
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
            <a class="nav-link active" aria-current="page" href="miPrestamo.html">
                <img class="m-1"  src="img/Grupo 946.png" alt="">
                <!-- <img class="ms-3 me-2"  src="img/Grupo 946.png" alt=""> -->
                &nbsp;Mi préstamo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="clienteNotificaciones.html">
                <img class="m-1" src="img/Grupo 262.png" alt=""> 
                &nbsp;&nbsp;&nbsp;Notificaciones
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="clienteSoliNueva.html">
                <img class="m-1" src="img/Grupo 264.png" alt="">
                Solicitud de nuevo crédito
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="clienteDocuInfor.html">
                <img class="m-1" src="img/ICONO_DOC E INF_ GRIS.svg" alt=""> 
                &nbsp;&nbsp;&nbsp;Documentación e información
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="m-1" src="img/Grupo 397.png" alt=""> 
                &nbsp;&nbsp;Ajustes
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#"><img class="me-2" src="img/Grupo 947.png" alt=""> Mi perfil</a></li>
              <li><a class="dropdown-item" href="clienteMenuAjustesContacto.html"><img class="me-2" src="img/Grupo 950.png" alt=""> Contacto</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><img class="me-2" src="img/Grupo 948.png" alt=""> Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav>

<div class="container">
    <br>
    <h1 class=" font-bold text-center" style="color: #4A9D22; font-size: 50px;">Mi préstamo</h1>
    <br />
    <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
        Datos generales de crédito
    </h1>
    <br>
    <center>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="border text-center" scope="col">Número de cliente</th>
                    <th class="border text-center" scope="col">Número de crédito</th>
                    <td class="" style="border: none;">
                        <button type="button" class="btn btn-success text-center" style="background: #4A9D22; ">Adelantar pagos</button>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row">1</th> -->
                    <td class="border text-center">23987</td>
                    <td class="border text-center">10987654321</td>
                </tr>
                <tr>
                    <th class="border text-center" scope="col">Monto autorizado</th>
                    <th class="border text-center" scope="col">Fecha de inicio del crédito</th>
                </tr>
                <tr>
                    <td class="border text-center">$ 800.00</td>
                    <td class="border text-center">12/05/2022</td>
                </tr>
                <tr>
                    <th class="border text-center" scope="col">Número de pagos</th>
                    <th class="border text-center" scope="col">Fecha de término del crédito</th>
                </tr>
                <tr>
                    <td class="border text-center">5</td>
                    <td class="border text-center">12/08/2022</td>
                </tr>
            </tbody>
        </table>
    </center>
</div>

<div class="container">
    <br />
    <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
        Tabla de pagos
    </h1>
    <br>
    <div class="container justify-content-center">
        <div class="row g-3">
            <div class="col-auto col-sm-2">
                <label for="inputPassword6" class="col-form-label fw-bold">De</label>
            </div>
            <div class="col-auto col-sm-2">
                <input  type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto col-sm-2">
                <img src="img/Grupo 166.png" alt="">
            </div>
            <div class="col-auto col-sm-2">
                <label for="inputPassword6" class="col-form-label fw-bold">a</label>
            </div>
            <div class="col-auto col-sm-2">
                <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto col-sm-2">
                <img src="img/Grupo 166.png" alt="">
            </div>
            <div class="col-auto col-sm-2">
                <div class="input-group w-60">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-success" style="background: #4A9D22;">Buscar</button>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row g-3">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label fw-bold">De</label>
            </div>
            <div class="col-auto">
              <input  type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <img src="img/Grupo 166.png" alt="">
            </div>
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label fw-bold">a</label>
            </div>
            <div class="col-auto">
                <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                  <img src="img/Grupo 166.png" alt="">
            </div>
            <div class="col-auto">
                <div class="input-group w-60">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-success" style="background: #4A9D22;">Buscar</button>
            </div>
          </div>
      </div>
    <br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="border text-center" scope="col">Pago número</th>
                <th class="border text-center" scope="col">Fecha de pago</th>
                <th class="border text-center" scope="col">Monto de pago</th>
                <th class="border text-center" scope="col">Saldo insoluto</th>
                <th class="border text-center" scope="col"># pagos restantes</th>
                <th class="border text-center" scope="col">Resta por pagar</th>
                <!-- <td class="" style="border: none;">
                </td> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <th scope="row">1</th> -->
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
            </tr>
            <tr>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <!-- <th class="border" scope="col">Datos</th>
                <th class="border" scope="col">Datos</th> -->
            </tr>
            <tr>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
            </tr>
            
        </tbody>
    </table>
    <div class="row">

    </div>
</div>

<div class="container d-flex flex-row-reverse">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">< Anterior </a></li>
          <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">1</a></li>
          <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">2</a></li>
          <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">3</a></li>
          <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">4</a></li>
          <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">Siguiente > </a></li>
        </ul>
    </nav>
</div>

<div class="container">
    <br />
    <h1 class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733;">
        Tabla de amortización
    </h1>
    <br>
    <div class="d-flex justify-content-center">
        <div class="row g-3 ">
            <div class="col-auto">
              <label for="inputPassword6" class="col-form-label fw-bold">De</label>
            </div>
            <div class="col-auto">
              <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                <img src="img/Grupo 166.png" alt="">
            </div>
            <div class="col-auto">
                <label for="inputPassword6" class="col-form-label fw-bold">a</label>
            </div>
            <div class="col-auto">
                <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
                  <img src="img/Grupo 166.png" alt="">
            </div>
            <div class="col-auto">
                <div class="input-group w-60">
                    <span class="input-group-text" id="basic-addon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Buscar" aria-label="Buscar" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-success" style="background: #4A9D22;">Buscar</button>
            </div>
          </div>
      </div>
    <br />
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="border text-center" scope="col"> Numero de crédito </th>
                <th class="border text-center" scope="col"> # de pagos</th>
                <th class="border text-center" scope="col"> Próximo pago</th>
                <th class="border text-center" scope="col"> Interés</th>
                <th class="border text-center" scope="col"> Anual (CAT sin IVA)</th>
                <th class="border text-center" scope="col"> Pago a capital </th>
                <th class="border text-center" scope="col"> Intereses ordinarios</th>
                <th class="border text-center" scope="col"> Pago a capital</th>
                <th class="border text-center" scope="col"> Intereses ord</th>
                <th class="border text-center" scope="col"> IVA intereses</th>
                <th class="border text-center" scope="col"> Comisiones</th>
                <th class="border text-center" scope="col"> Pago total men</th>
                
                <!-- <td class="" style="border: none;">
                    <button type="button" class="btn btn-success" style="background: #4A9D22;">Adelantar pagos</button>
                </td> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- <th scope="row">1</th> -->
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                
            </tr>
            <tr>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                
            </tr>
            <tr>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
                <td class="border text-center">Datos</td>
            </tr>
            <tr>
                <td class="border text-center" colspan="12">TOTAL</td>
            </tr>
        </tbody>
    </table>
    <div class="row">

    </div>
</div>

<div class="container d-flex flex-row-reverse">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">< Anterior </a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">1</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">2</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">3</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">4</a></li>
            <li class="page-item"><a class="page-link" href="#" style="color: #615F5F;">Siguiente > </a></li>
        </ul>
    </nav>
</div>

<div class="container d-flex flex-row-reverse">
    <p style="font-size: 25px;">La tabla de amortización se genera al momento de iniciar su crédito. En caso de actualizarse por pagos adelantados a capital o
        por retraso, deberá solicitar la nueva tabla de amortización enviando un mensaje al área de cobranza. Dicha tabla se enviará
        en formato excel por correo electrónico.</p>
</div>

{{--Fotter--}}

    @include('components.landing.cuerpo._fotter')  

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/landing/sendEmail.js') }}"></script>
    <script src="{{ asset('js/landing/modal-register.js') }}"></script>
    @stack('js')
</body>

</html>
