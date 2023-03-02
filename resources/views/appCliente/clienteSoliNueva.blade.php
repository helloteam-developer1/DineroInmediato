<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Solicitud de nuevo crédito</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="icon" href="img/Grupo 264.png" />


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> --}}
    @livewireStyles
    @livewireScripts

    <style>
        .solicita:hover {
            background: #da8b0c !important;

            color: white;

        }

        .solicita {
            background: #f5a82d !important;
            color: white;
        }

        .btn-verde: {
            background: #38A937
        }

        .btn-verde:hover {
            color: #e0fc70;
        }

        /*Estlos de fuentes*/
        @font-face {
            font-family: 'CarotSans-Medium';
            src: url("../fonts/CarotSans-Medium.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-Regular';
            src: url("../fonts/CarotSans-Regular.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-ExtraLight';
            src: url("../fonts/CarotSans-ExtraLight.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-Bold';
            src: url("../fonts/CarotSans-Bold.otf") format('woff');
        }

        @font-face {
            font-family: 'CarotSans-Light';
            src: url("../fonts/CarotSans-Light.otf") format('woff');
        }

        .texto-carotSans--Medium {
            font-family: 'CarotSans-Medium';
        }

        .texto-carotSans--Regular {
            font-family: 'CarotSans-Regular';
        }

        .texto-carotSans--ExtraLight {
            font-family: 'CarotSans-ExtraLight';
        }

        .texto-carotSans--Bold {
            font-family: 'CarotSans-Bold';
        }

        .texto-carotSans--Light {
            font-family: 'CarotSans-Light';
        }
    </style>
</head>

@switch($estatus)
  @case(1)
    <body onload="openmodalmarcha()">
  @break
  @case(2)
    <body onload="openmodalsolicitar()">    
  @break
  @case(3)
  <body onload="openmodalsolicitudp()">    
  @break
  @default
    <body>
@endswitch
    
@include('appCliente.components.menu')

<div class="container">
    <br />
    <p class="font-bold text-center p-1 texto-carotSans--Medium" style="color: #4a9d22; font-size: 50px;">
        Solicitud de nuevo crédito
    </p>
    <p class="font-bold text-center texto-carotSans--Regular" style="color: #f5a733; font-size: 30px; margin-bottom: 20px;">
        Crédito disponible
    </p>
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-4" style="margin-bottom: 20px;">
          <form action="{{route('solicitar')}}" method="POST">
            @csrf
            <select class="form-select" id="validationCustom04" aria-label="monto" name="monto" required>
                <option selected>Monto Solicitado</option>
                @while ($i<=4900)
                    <option value="{{$i=$i+100;}}">{{$i}}</option>
                @endwhile
            </select>
            @error('monto')
              <p style="border: #39A935; color:red;">{{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="row mb-3 justify-content-center">
        <div class="col-sm-4">
            <center>
                <!-- Button trigger modal -->
                <button type="submit" class="btn " style="background-color: #39a935; color: #ffffff;">
                    Solicitar crédito
                </button>
            </center>
          </form>
            <!-- Modal Credito en Marcha-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title col-11 text-center p-medium" id="exampleModalLabel"
                                style="color: #4A9D22; font-size: 50px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solicitar crédito
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body ms-5 me-5">
                            <hr>

                            <p style="color:#da8b0c; font-size:20px;">Crédito en marcha</p>
                            <p class="p-regular" style="font-size: 20px; color:#474747;">
                                Para solicitar un nuevo crédito usted debe liquidar el crédito. Anticipe pagos para
                                liquidar su préstamo actual y solicite uno nuevo.
                            </p>



                        </div>
                        <div class="modal-footer justify-content-center" style="border: none">
                            <button class="btn btn-primary p-medium" type="button"
                                style="background-color: #39A935; font-size: 20px; color: #FFFFFF;" data-bs-dismiss="modal">
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{--Modal solicitud enviada--}}
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title col-11 text-center p-medium" id="exampleModalLabel"
                                style="color: #4A9D22; font-size: 50px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solicitar crédito
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body ms-5 me-5">
                            <hr>
                            <p class="p-regular" style="font-size: 20px; color:#474747;">
                              Se envíara esta solicitud al back offices del administrador para que apruebe o
                              no dicha solicitud.
                            </p>
                          </div>
                        <div class="modal-footer justify-content-center" style="border: none">
                            <button class="btn btn-primary p-medium" type="button"
                                style="background-color: #39A935; font-size: 20px; color: #FFFFFF;"data-bs-dismiss="modal" >
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="border: none;">
                            <h1 class="modal-title col-11 text-center p-medium" id="exampleModalLabel"
                                style="color: #4A9D22; font-size: 50px;">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solicitar crédito pendiente
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body ms-5 me-5">
                            <hr>
                            <p class="p-regular" style="font-size: 20px; color:#474747;">
                              Tenemos una solicitud de crédito pendiente, por favor se paciente.<br />
                              Mantente al pendiente de la aplicación, te notificaremos por correo electrónico
                              si tu crédito fue aprobado y qué línea de crédito te hemos otorgado.
                            </p>
                          </div>
                        <div class="modal-footer justify-content-center" style="border: none">
                            <button class="btn btn-primary p-medium" type="button"
                                style="background-color: #39A935; font-size: 20px; color: #FFFFFF;"data-bs-dismiss="modal" >
                                Aceptar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>

{{-- Fotter --}}

{{-- @include('components.landing.cuerpo._fotter') --}}
{{-- @include('components.landing.cuerpo._fotterClienteBootstrapResponsivo') --}}
@include('components.landing.cuerpo._fotterClienteBootstrap')
<script>
    function openmodalmarcha() {
        $('#exampleModal').modal('show');
    }
    function openmodalsolicitar(){
        $('#exampleModal2').modal('show');
    }
    function openmodalsolicitudp(){
        $('#exampleModal3').modal('show');
    }

</script>

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
