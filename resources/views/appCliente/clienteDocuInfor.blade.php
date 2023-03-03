
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Documentación e información</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/ICONO_DOC E INF_ GRIS.svg">

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
    {{--<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>--}}
    @livewireStyles
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

        /*Estlos de fuentes*/
        @font-face {
        font-family: 'CarotSans-Medium';
        src: url("./fonts/CarotSans-Medium.otf") format('woff');
      }
      @font-face {
        font-family: 'CarotSans-Regular';
        src: url("./fonts/CarotSans-Regular.otf") format('woff');
      }
      @font-face {
        font-family: 'CarotSans-ExtraLight';
        src: url("./fonts/CarotSans-ExtraLight.otf") format('woff');
      }
      @font-face {
        font-family: 'CarotSans-Bold';
        src: url("./fonts/CarotSans-Bold.otf") format('woff');
      }
      @font-face {
        font-family: 'CarotSans-Light';
        src: url("./fonts/CarotSans-Light.otf") format('woff');
      }
      .texto-carotSans--Medium{
        font-family: 'CarotSans-Medium';
      }
      .texto-carotSans--Regular{
        font-family: 'CarotSans-Regular';
      }
      .texto-carotSans--ExtraLight{
        font-family: 'CarotSans-ExtraLight';
      }
      .texto-carotSans--Bold{
        font-family: 'CarotSans-Bold';
      }
      .texto-carotSans--Light{
        font-family: 'CarotSans-Light';
      }
      .alerta{
        background-color: #EAF9EA;
        border-radius: 10px;
      }
      .titulo-alert{
        color: #39A935;
        margin-top: 10px;
      }
      .subt-alert{
       color:#F29100 ;
      }
      .red{
        color: red;
      }
      .btn-Guardar{
        width: 90px;
        background-color: #38A937;
        border-radius: 5px;
        color: white;
    }
    .btn-Guardar:hover{
        color: white;
    }
      .acordiontext{
        position: relative;
        width: 100%;
        height: 50px;
        color: #3C3C3B;
        background-color: white;
        text-align: left;
        font-size: 17px;
        padding-left: 20px;
        border: 1px solid gainsboro;

    }
    .acordiontext:focus{
        color: #f5a82d;
    }
   .acordionImg{
        width: 28px;
        height: 16px;
        position: absolute;
        left: 93%;
    }
    </style>
</head>
{{--Si existe un estado abre la modal con dicho estado--}}
@if ($estado!=null)
<body onload="openmodal()">
@else
<body>
@endif
{{--Componente Modal que muestra el estado del credito si existe una solicitud--}}
<x-appClienteComponentes.modal.modalEstatusCredito opcion="{{$opcion}}" estado="{{$estado}}" mensaje="{{$mensaje}}" />
{{--Menú Cliente--}}

<livewire:app-cliente.menu-cliente/>
<div class="container">
    <br>
    <h1 class="text-center texto-carotSans--Medium" style="color: #4A9D22; font-size: 70px;">Documentación e información.</h1>

    <br />
    <!-- <h1 class="text-3xl font-bold text-center" style="color: #F5A733;">

    </h1> -->
</div>

<div class="container">


    <div class="accordion" id="accordionExample">
        {{--Información general--}}
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class=" acordiontext acardionimg collapsed texto-carotSans--Regular" id="butonacordeon1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <img class="acordionImg" id="iconAcordion1" src="{{ asset('img/assets/aplicacionCliente/Polígono 9.png')  }}" alt="">
                Información general
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold texto-carotSans--Light">No. Cliente:  {{Auth::user()->num_cliente;}}</label>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold texto-carotSans--Regular">Nombre</label>
                        <div class="col-sm-4">
                          <input type="email" class="form-control texto-carotSans--ExtraLight" id="inputEmail3"  value="{{Auth::user()->nombre;}}">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Fecha de nacimiento</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control texto-carotSans--ExtraLight" id="inputEmail3"  value="{{Auth::user()->fecha_nacimiento;}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">CURP</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control texto-carotSans--ExtraLight" style="text-transform: uppercase;" id="inputEmail3" value="{{Auth::user()->curp;}}">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Teléfono</label>
                        <div class="col-sm-4">
                          <input type="tel" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->telefono_contacto;}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Dirección</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->direccion}}">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Correo</label>
                        <div class="col-sm-4">
                          <input type="tel" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->email;}}">
                        </div>
                    </div>
                </form>
                <div class="container" style="margin: 20px;">
                  <div class="row mb-3 justify-content-center">
                    <div class="col">
                        @switch($documentacion)
                          @case(1)
                          <img src="img/assets/aplicacionCliente/Grupo 117.png" alt="" width="3%" height="auto"><span>La información es correcta y ha sido verificada.</span>
                            @break
                          @case(2)
                          <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="3%" height="auto"><span style="border-color: red;">X Favor de subir un documento válido, actual o vigente.</span>
                          @break
                          @case(3)
                          <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="3%" height="auto"><span>Favor de subir la documentación solicitada o editar el campo incorrecto.</span>
                          @break
                          @default

                        @endswitch
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        {{--Información Laboral--}}
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="acordiontext acardionimg collapsed text-datgencred" id="butonacordeon2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <img class="acordionImg" id="iconAcordion2" src="{{ asset('img/assets/aplicacionCliente/Polígono 9.png')  }}" alt="">
                Información Laboral
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Trabajo</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->trabajo;}}">
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Nombre de la empresa</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->empresa_trabajo;}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Rama de la empresa</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->rama_empresa;}}">
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Ingreso mensual</label>
                    <div class="col-sm-4">
                      <input type="tel" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->ingreso;}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Crédito hipotecario</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" value="{{Auth::user()->credito;}}">
                    </div>
                </div>
              </form>
              <div class="container" style="margin: 20px;">
                <div class="row mb-3 justify-content-center">
                  <div class="col">
                  @switch($documentacion)
                    @case(1)
                    <img src="img/assets/aplicacionCliente/Grupo 117.png" alt="" width="3%" height="auto"><span>La información es correcta y ha sido verificada.</span>
                      @break
                    @case(2)
                    <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="3%" height="auto"><span style="border-color: red;">X Favor de subir un documento válido, actual o vigente.</span>
                    @break
                    @case(3)
                    <img src="img/assets/aplicacionCliente/Grupo 444.png" alt="" width="3%" height="auto"><span>Favor de subir la documentación solicitada o editar el campo incorrecto.</span>
                    @break
                    @default
                  @endswitch
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        {{--Documentación--}}
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="acordiontext acardionimg collapsed text-datgencred" id="butonacordeon3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <img class="acordionImg" id="iconAcordion3" src="{{ asset('img/assets/aplicacionCliente/Polígono 9.png')  }}" alt="">
                Documentación
            </button>
          </h2>

          @if ($estado=='Falta información que completar o es incorrecta')
          <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          @else
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          @endif

            <div class="accordion-body"  style="margin-left: 120px;">
              {{--Formulario subir img--}}
              <livewire:app-cliente.documentacion documentacion={{$documentacion}}/>

            </div>
          </div>
        </div>

        {{--Información personal de pago--}}
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="acordiontext acardionimg collapsed" id="butonacordeon4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <img class="acordionImg" id="iconAcordion4" src="{{ asset('img/assets/aplicacionCliente/Polígono 9.png')  }}" alt="">
                Información personal de forma de pago
              </button>
            </h2>
            @if ($opcion==3)
              <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            @else
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
            @endif
              <div class="accordion-body">
                <livewire:app-cliente.datos-bancarios />
              </div>
            </div>
        </div>


        {{--Cobro--}}
        
    </div>
</div>
<br><br><br><br><br>

{{--Fotter--}}
    @livewireScripts
    @include('components.landing.cuerpo._fotterClienteBootstrap')
    <script>
      function openmodal(){
        $('#exampleModal').modal('show');
      }
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/app-clientes-scripts/acordeon.js') }}"></script>

    <!-- Template Javascript -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/landing/sendEmail.js') }}"></script>
    <script src="{{ asset('js/landing/modal-register.js') }}"></script>
    @stack('js')
</body>

</html>
