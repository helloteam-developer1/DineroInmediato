<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Dinero Inmediato</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="{{ asset('css/landing/style.css') }}" rel="stylesheet">
    @stack('css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @livewireStyles
    @livewireScripts
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 shadow">
        <a href="index.html" class="navbar-brand p-0">
            <img src="{{ asset('img/logo.png')}}" width="100"  class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse bg-white  p-3" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active text-dark">Inicio</a>
                <a href="about.html" class="nav-item nav-link text-dark">Acerca de Nosotros</a>
            </div>

            <a href="" class="btn btn-outline-secondary py-2 px-4 ms-3">Inicio de Sesión</a>
            <a href="" class="btn btn-primary py-2 px-4 ms-3">¡Solicitalo ya!</a>
        </div>
    </nav>
    <main>
        <div>
            @yield('content')

        </div>
    </main>

    <x-modal-footer titulo="terminos-condiciones" idm="terminosCondiciones"/>
    <x-modal-footer titulo="quienes-somos" idm="quienesSomos"/>
    <x-modal-footer titulo="acerca-nosotros" idm="acercaNosotros"/>
    <x-modal-footer titulo="politica-privacidad" idm="politicaPrivacidad"/>

    <footer>
        <div class="container grid grid-cols-3 pt-5 pb-3 justify-items-center centerTextMovile">

            {{-- contacto  Mobile --}}

            <div class="grid grid-cols-1 col-span-3 sm:col-span-3 md:col-span-1 lg:col-span-1 xl:col-span-1 my-2 contactMobile block sm:block md:hidden lg:hidden xl:hidden">
                <div>
                    <span class="text-dark"><strong>Contactanos</strong></span>
                </div>
                <div>

                    <form id="sendContactEmail" data-info="mobile">
                        <div class="max-w-2xl mx-auto">
                            <div class="relative mb-6">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                    </div>
                                    <input type="email" id="emailContact-mobile" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5    dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Correo" required>
                                </div>

                                <div class="flex">
                                    <textarea type="text" id="comentContact-mobile" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comentario" required></textarea>
                                </div>
                                <div class="text-right mt-3">
                                    <button type="submit" class="btn w-100 p-2 text-white" style="background: #38A937;"> <strong>Enviar</strong> </button>
                                </div>

                            </div>
                        </form>
                    </div>

            </div>


            <div class="col-span-3 sm:col-span-3 md:col-span-1 lg:col-span-1 xl:col-span-1 my-2 grisd-footer">
                <span style="color: #617E21;"><strong>Informaci&oacute;n legal</strong></span>
                    <div class="text-white">
                        <span data-bs-toggle="modal" data-bs-target="#terminosCondiciones" class="pointer"> Terminos y condiciones 20 </span>
                    </div>
                    <div class="text-white">
                        <span data-bs-toggle="modal" data-bs-target="#politicaPrivacidad" class="pointer"> Pol&iacute;tica y aviso de privacidad </span>
                    </div>
                    <div class="mt-5 " >
                        <span class="text-dark"><strong>¿Te gusto la p&aacute;gina?</strong></span>
                        <center>
                            <img class="imgManosmobile" src="{{ asset('img/landing/index/Grupo 63.png') }}" width="50%" alt="dislikeAndLike">
                        </center>
                            <img class="imgManosdesk" src="{{ asset('img/landing/index/Grupo 63.png') }}" width="50%" alt="dislikeAndLike">
                    </div>
            </div>
            <div class="col-span-3 sm:col-span-3 md:col-span-1 lg:col-span-1 xl:col-span-1 my-2 grisd-footer">
                <span style="color: #617E21;">
                    <strong>Acerca al cliente</strong>
                </span>
                <div class="text-white">
                    <a href="/preguntasfrec" style="color: white"><span class="pointer"> Preguntas Frecuentes</span></a>
                </div>
                <div class="text-white">
                    <span data-bs-toggle="modal" data-bs-target="#quienesSomos" class="pointer"> Qui&eacute;nes somos? </span>
                </div>
                <div class="text-white">
                    <span data-bs-toggle="modal" data-bs-target="#acercaNosotros" class="pointer"> Acerca de nosotros </span>
                </div>

                <div class="mt-5 input-group icons">
                    <img class="mr-5" src="{{ asset('img/landing/index/Grupo 50.png') }}" width="50">
                    <img  src="{{ asset('img/landing/index/Grupo 48.png') }}" width="50">
                </div>

            </div>

            {{-- contacto Escritorio --}}
            <div class="col-span-3 sm:col-span-3 md:col-span-1 lg:col-span-1 xl:col-span-1 my-2 hidden sm:hidden md:block lg:block xl:block grisd-footer">
                <span class="text-dark"><strong>Contactanos</strong></span>
                    <form id="sendContactEmail" data-info="desktop">
                        <div class="max-w-2xl mx-auto">
                            <div class="relative mb-6">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                </div>
                                <input type="email" id="emailContact-desktop" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5    dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Correo" required>
                            </div>

                            <div class="flex">
                                <textarea type="text" id="comentContact-desktop" class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comentario" required></textarea>
                            </div>
                            <div class="text-right mt-3">
                                <button class="btn p-2 text-white" style="background: #38A937;"> <strong>Enviar</strong> </button>
                            </div>
                        </div>
                    </form>

            </div>
            <div class="col-span-3 text-white text-center mt-5"> <strong>{{ Date('Y') }} Dinero inmediato | Todos los derechos reservados</strong> </div>
        </div>
    </footer>

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

    @stack('js')
</body>

</html>
