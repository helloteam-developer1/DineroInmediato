<!DOCTYPE html>


<body>
   
{{--Menú--}}
@include('components.landing.cuerpo._menu')


  <div class="content cent">
    
        <div class="row cent">
            
            
                <p class="texto-solicita-verde" style="padding-bottom: 25px; padding-top:15px;">Recuperar contraseña</p>
                <div class="">
                    <input type="password" class="form-control"  placeholder="Contraseña nueva">
                    <br /> 
                    <input type="password" class="form-control" placeholder="Confirmar contraseña">

                    <a href="" class="btn btn-verde btn-md" style="margin-top: 30px; ">Aceptar</a>    
                </div>
                
                
            </div>
        </div>
        <br />
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
