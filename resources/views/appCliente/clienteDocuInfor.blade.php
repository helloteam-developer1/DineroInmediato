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

      
    </style>
</head>

<body >
    
{{--Menú Cliente--}}
@include('components.landing.cuerpo._menuClienteEmma')

<div class="container">
    <br>
    <h1 class="text-center texto-carotSans--Medium" style="color: #4A9D22; font-size: 70px;">Documentación e información</h1>
    <br />
    <!-- <h1 class="text-3xl font-bold text-center" style="color: #F5A733;">
        
    </h1> -->
</div>

<div class="container">
  <p class="texto-carotSans--Light" style="font-size: 35px;">En esta sección podrás ver la documentación que has subido a la aplicación y la que te
    falta por subir.</p>

    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed texto-carotSans--Regular" style="color: #F5A733;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Información general
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold texto-carotSans--Light">No. Cliente:  3411</label>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold texto-carotSans--Regular">Nombre</label>
                        <div class="col-sm-4">
                          <input type="email" class="form-control texto-carotSans--ExtraLight" id="inputEmail3" placeholder="Juan Gutiérrez Mora">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Fecha de nacimiento</label>
                        <div class="col-sm-4">
                          <input type="date" class="form-control" id="inputEmail3" placeholder="Juan Gutiérrez Mora">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">CURP</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="GUMJ890MX09VZ907">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Teléfono</label>
                        <div class="col-sm-4">
                          <input type="tel" class="form-control" id="inputEmail3" placeholder="9521234578">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Dirección</label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="tabasco #89 regional">
                        </div>
                        <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Correo</label>
                        <div class="col-sm-4">
                          <input type="tel" class="form-control" id="inputEmail3" placeholder="Juan09@correo.com">
                        </div>
                    </div>
                </form>
                <div class="container" style="margin: 20px;">
                  <div class="row mb-3 justify-content-center">
                    <div class="col">
                      <img src="img/Grupo 117.png" alt="" width="50" height="50"><span class="texto-carotSans--Light"> La información es correcta y ha sido verificada.</span>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed text-datgencred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Información Laboral
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Trabajo</label>
                    <div class="col-sm-4">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Juan Gutiérrez Mora">
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Nombre de la empresa</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="inputEmail3" placeholder="Juan Gutiérrez Mora">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Rama de la empresa</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Supermercado">
                    </div>
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Ingreso mensual</label>
                    <div class="col-sm-4">
                      <input type="tel" class="form-control" id="inputEmail3" placeholder="9521234578">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label fw-bold">Crédito hipotecario</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="No">
                    </div>
                </div>
              </form>
              <div class="container" style="margin: 20px;">
                <div class="row mb-3 justify-content-center">
                  <div class="col">
                    <img src="img/Grupo 117.png" alt="" width="50" height="50"><span> La información es correcta y ha sido verificada.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed text-datgencred" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Documentación
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body"  style="margin-left: 120px;">
              <form>
                <div class="row mb-3 justify-content-center">
                    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE (Adjuntar INE por ambos lados)</label>
                    <div class="col-sm-4">
                      <button class="btn btn-gris" onclick="document.getElementById('getFile').click()">Adjuntar archivo</button>
                      <input type='file' id="getFile" style="display:none">
                      <div class="file-select" id="src-file1" >
                        <input type="file" name="src-file1" aria-label="Archivo">
                      </div>
                      
                      <div class="file-select" id="src-file2" >
                        <input type="file" name="src-file2" aria-label="Archivo">
                      </div>
                      <!-- <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button> -->
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Comprobante de domicilio</label>
                    <div class="col-sm-4">
                      <div class="dropdown">
                        <button
                          class="btn btn-light border btn-gris"
                          type="button"
                          id="dropdownMenuButton1"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                        Adjuntar archivo
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li>
                            <input
                              class="dropdown-item form-control form-control-sm"
                              id="formFileSm"
                              type="file"
                              value="ADJUNTAR ARCHIVO"
                            />
                          </li>
                          <!-- <li><a class="dropdown-item" href="#">Subir Archivo</a></li> -->
                        </ul>
                      </div>
                      <!-- <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button> -->
                    </div>
                    
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">CURP</label>
                    <div class="col-sm-4">
                      <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label>
                  <div class="col-sm-4">
                    <button type="button" class="btn btn-secondary btn-lg" style="font-family: Carot Sans;" disabled>Adjuntar archivo</button>
                  </div>
                </div>
              </form>
              <div class="container" style="margin: 20px;">
                <div class="row mb-3 justify-content-center">
                  <div class="col-8">
                    <img src="img/Grupo 444.png" alt="" width="50" height="50"><span>“favor de subir la documentación solicitada
                      o editar el campo incorrecto</span>
                  </div>
                  <div class="col">
                    <button type="button" class="btn btn-success">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Información personal de forma de pago
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <form class="row g-3 needs-validation" novalidate>
                  <p class="fw-bold">Para depósito del crédito bancario:</p>
                  <p>Ingrese sus datos de su cuenta de nómina para depositar su crédito aprobado.</p>
                  <p>Nota: Es importante que la cuenta donde le depositaremos sea su cuenta de nómina.</p>
                  <div class="row mb-3 justify-content-center">
                      <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #3C3C3B; font-size: 20px;">INE (Adjuntar INE por ambos lados)</label> -->
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre del titular" required>
                        <div class="valid-feedback">
                          Nombre del Titular Verificado
                         </div>
                         <div class="invalid-feedback">
                           Campo obligatorio se requiere Nombre del Titular
                         </div>
                      </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                      <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Comprobante de domicilio</label> -->
                      <div class="col-sm-4">
                        <select class="form-select" aria-label="Banco" required>
                          <option selected></option>
                          <option value="1">Banco 1</option>
                          <option value="2">Banco 2</option>
                          <option value="3">Banco 3</option>
                        </select>
                        <div class="valid-feedback">
                          Banco Verificado
                        </div>
                        <div class="invalid-feedback">
                           Campo obligatorio se requiere el Banco de la tarjeta
                        </div>
                      </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                      <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">CURP</label> -->
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Numero de tarjeta" required>
                        <div class="valid-feedback">
                          Número de su tarjeta Verificado
                         </div>
                         <div class="invalid-feedback">
                           Campo obligatorio se requiere Número de su tarjeta
                         </div>
                      </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label> -->
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Numero de cuenta" required>
                      <div class="valid-feedback">
                        Número de cuenta Verificado
                       </div>
                       <div class="invalid-feedback">
                         Campo obligatorio se requiere Número de cuenta
                       </div>
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label> -->
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Clave interbancaria">
                    </div>
                  </div>
                  <div class="row mb-3 justify-content-center">
                    <div class="col-sm-4">
                      <center>
                        <button type="submit" class="btn btn-success">Guardar</button>
                      </center>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        </div>
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
              Información personal de forma de pago 2
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mb-3 justify-content-center">
                    <label for="inputNombreTitular" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #5E6061; font-size: 20px;">Nombre del titular de la tarjeta</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputNombreTitular" placeholder="" required>
                      <div class="valid-feedback">
                       Nombre del Titular Verificado
                      </div>
                      <div class="invalid-feedback">
                        Campo obligatorio se requiere Nombre del Titular
                      </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Número de su tarjeta</label>
                    <div class="col-sm-4">
                      <input type="tel" class="form-control" id="inputEmail3" placeholder="" required>
                      <div class="valid-feedback">
                        Número de su tarjeta Verificado
                       </div>
                       <div class="invalid-feedback">
                         Campo obligatorio se requiere Número de su tarjeta
                       </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="validationCustom04" class="col-sm-5 col-form-label fw-bold">Banco</label>
                    <div class="col-sm-4">
                      <select class="form-select" id="validationCustom04" aria-label="Banco" required>
                        <option selected></option>
                        <option value="1">Banco 1</option>
                        <option value="2">Banco 2</option>
                        <option value="3">Banco 3</option>
                        
                      </select>
                      <div class="valid-feedback">
                        Banco Verificado
                      </div>
                      <div class="invalid-feedback">
                         Campo obligatorio se requiere el Banco de la tarjeta
                      </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-4">
                    <label for="inputEmail3" class="col-sm-6 col-form-label fw-bold">Fecha de expiración</label>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputEmail3" class="col-sm-6 col-form-label fw-bold">Código de seguridad</label>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label> -->
                  <div class="col-sm-4">
                    <input type="month" class="form-control" id="inputEmail3" placeholder="" required>
                    <div class="invalid-feedback">
                      Se requiere mes y año de expiración de la tarjeta
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="cc-cvv" placeholder="CVV" required>
                    <div class="invalid-feedback">
                      Se requiere código de seguridad
                    </div>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" required>
                      <label class="form-check-label" for="invalidCheck1">
                        Acepto términos y condiciones
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Acepto políticas de privacidad
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-6">
                    <center>
                      <button type="submit" class="btn btn-success btn-lg">Pagar</button>
                    </center>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-sm-6">
                    <p class="text-3xl font-bold text-datgencred text-center" style="color: #F5A733; font-size: 30px;">
                        Aceptamos tarjetas
                    </p>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-6">
                    <img src="{{ asset('img/assets/aplicacionCliente/bancos.png')}}" alt="">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        

        <div class="accordion-item">
          <h2 class="accordion-header" id="headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
              Para cobro domiciliado, los datos de tarjeta de débito 
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <form class="row g-3 needs-validation" novalidate>
                <div class="row mb-3 justify-content-center">
                    <label for="inputNombreTitular" class="col-sm-5 col-form-label fw-bold" style="font-family: Carot Sans; color: #5E6061; font-size: 20px;">Nombre del titular de la tarjeta</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputNombreTitular" placeholder="" required>
                      <div class="valid-feedback">
                       Nombre del Titular Verificado
                      </div>
                      <div class="invalid-feedback">
                        Campo obligatorio se requiere Nombre del Titular
                      </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Número de su tarjeta</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="" required>
                      <div class="valid-feedback">
                        Número de su tarjeta Verificado
                       </div>
                       <div class="invalid-feedback">
                         Campo obligatorio se requiere Número de su tarjeta
                       </div>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                    <label for="validationCustom04" class="col-sm-5 col-form-label fw-bold">Banco</label>
                    <div class="col-sm-4">
                      <select class="form-select" id="validationCustom04" aria-label="Banco" required >
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-4">
                    <label for="inputEmail3" class="col-sm-6 col-form-label fw-bold">Fecha de expiración</label>
                  </div>
                  <div class="col-sm-4">
                    <label for="inputEmail3" class="col-sm-6 col-form-label fw-bold">Código de seguridad</label>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <!-- <label for="inputEmail3" class="col-sm-5 col-form-label fw-bold">Ultimo estado de nómina</label> -->
                  <div class="col-sm-4">
                    <input type="month" class="form-control" id="inputEmail3" placeholder="" required>
                    <div class="invalid-feedback">
                      Se requiere mes y año de expiración de la tarjeta
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="cc-cvv" placeholder="CVV" required>
                    <div class="invalid-feedback">
                      Se requiere código de seguridad
                    </div>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-4">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck1" required>
                      <label class="form-check-label" for="invalidCheck1">
                        Acepto términos y condiciones
                      </label>
                      <div class="invalid-feedback">
                        Por favor Acepta términos y condiciones
                      </div>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                      <label class="form-check-label" for="invalidCheck2">
                        Acepto cargo domicilio
                      </label>
                      <div class="invalid-feedback">
                        Por favor  Acepto cargo domicilio
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mb-3 justify-content-center">
                  <div class="col-sm-6">
                    <center>
                      <button type="submit" class="btn btn-success">Guardar</button>
                    </center>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
    </div>
</div>
<br><br><br><br><br>

{{--Fotter--}}

    @include('components.landing.cuerpo._fotterClienteBootstrap')  

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
