{{-- @include('landing.modales.email') --}}
    @yield('modales')

    <x-modal-footer titulo="terminos-condiciones" idm="terminosCondiciones"/>
    <x-modal-footer titulo="quienes-somos" idm="quienesSomos"/>
    <x-modal-footer titulo="acerca-nosotros" idm="acercaNosotros"/>
    <x-modal-footer titulo="politica-privacidad" idm="politicaPrivacidad"/>
<footer class="py-5" style="background-color: #f27c00">
  <div class="containerUno">
    <div class="row">
      <div class="col">col 1</div>
      <div class="col">col 2</div>
      <div class="col">col 3</div>
    </div>
    <div class="row d-flex flex-row-reverse">
      <div class="col" >col 1</div>
      <div class="col">col 2</div>
      <div class="col">col 3</div>
    </div>
  </div>
  <div class="boxes">
    <button>Button 1</button>
    <button>
      <div class="col-auto" style="margin: 30px">
        <form>
          <div class="mb-3">
            <h5 style="color: #518B27;">Contactanos</h5>
          </div>
          <!-- <div class="mb-3">
            <div class="d-flex w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Contactanos</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email">
              <input id="newsletter1" type="text" class="form-control" placeholder="Comentarios">
              <button class="btn btn-primary" type="button">Enviar</button>
            </div>
          </div> -->
          <div class="mb-3">
            <div class="d-flex w-100 gap-1">
              <!-- <input id="newsletter1" type="text" class="form-control" placeholder="Email"> -->
              <input
                type="text"
                class="form-control"
                aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-lg"
                placeholder="Email"
                size="38"
              />
            </div>
          </div>
          <div class="mb-3">
            <div class="d-flex w-100 gap-2">
              <div class="form-floating">
                <textarea
                  class="form-control"
                  placeholder="Leave a comment here"
                  id="floatingTextarea2"
                  style="height: 100px; resize: none;"
                  rows="4"
                  cols="40"
                ></textarea>
                <label for="floatingTextarea2">Comentario</label>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <div>
              <button class="btn" type="button" style="background-color: #4a9d22; float: right; color: #FFFFFF;">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </button>
    <button><div class="col-auto pb-1" style="margin: 30px 60px 30px 60px;">
      <h5  class="texto-carotSans--Medium mb-4" style="color: #518B27; font-size: 20px;">Atención al cliente</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2" style="color: #4A9D22;">
          <a href="./preguntasfrec" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >Preguntas Frecuentes</a
          >
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >¿Quiénes somos?</a
          >
        </li>
        <li class="nav-item mb-4">
          <a href="#" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >Acerca de nosotros</a
          >
        </li>
        <div class="container">
          <div class="row">
            <div class="col">
              <li class="nav-item">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/facebook.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
            <div class="col">
              <li class="nav-item">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/instagram.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </button>
    <button><div
      class="col-auto pb-1"
      style="margin: 30px 60px 30px 60px;"
    >
      <p class="texto-carotSans--Light" style="color: #518B27; font-size: 20px;">Información legal</p>
      <ul class="nav flex-column">
        <li class="nav-item mb-2" style="color: #518B27;">
          <a href="#" data-bs-toggle="modal" data-bs-target="#terminosCondiciones" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;">
            Términos y condiciones 20
          </a>
        </li>
        <li class="nav-item mb-4">
          <a href="#" data-bs-toggle="modal" data-bs-target="#politicaPrivacidad" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >Política y aviso de privacidad</a
          >
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link p-0 texto-carotSans--Bold" style="color: #3C3C3B; font-size: 20px;"
            >¿Te gusto la página?</a
          >
        </li>
        <div class="container">
          <div class="row">
            <div class="col">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/dislike.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
            <div class="col">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/like.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </button>
  </div>
  {{-- <div class="row justify-content-center d-flex flex-row-reverse " style="margin: 30px;"> --}}
    <div class="row justify-content-center" style="margin: 30px;">
    {{-- <div class="row justify-content-center d-flex flex-column-reverse" style="margin: 30px;"> --}}
    <!-- <div class="col-auto">
        
    </div> -->
    <div
      class="col-auto pb-1"
      style="margin: 30px 60px 30px 60px;"
    >
      <p class="texto-carotSans--Light" style="color: #518B27; font-size: 20px;">Información legal</p>
      <ul class="nav flex-column">
        <li class="nav-item mb-2" style="color: #518B27;">
          <a href="#" data-bs-toggle="modal" data-bs-target="#terminosCondiciones" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;">
            Términos y condiciones 20
          </a>
        </li>
        <li class="nav-item mb-4">
          <a href="#" data-bs-toggle="modal" data-bs-target="#politicaPrivacidad" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >Política y aviso de privacidad</a
          >
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link p-0 texto-carotSans--Bold" style="color: #3C3C3B; font-size: 20px;"
            >¿Te gusto la página?</a
          >
        </li>
        <div class="container">
          <div class="row">
            <div class="col">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/dislike.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
            <div class="col">
              <li class="nav-item mb-2">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/like.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
          </div>
        </div>
      </ul>
    </div>
    <!-- <div class="col-auto">
        
    </div> -->
    <!-- <div class="col-auto">
        
    </div> -->
    <div class="col-auto pb-1" style="margin: 30px 60px 30px 60px;">
      <h5  class="texto-carotSans--Medium mb-4" style="color: #518B27; font-size: 20px;">Atención al cliente</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2" style="color: #4A9D22;">
          <a href="./preguntasfrec" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >Preguntas Frecuentes</a
          >
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >¿Quiénes somos?</a
          >
        </li>
        <li class="nav-item mb-4">
          <a href="#" class="nav-link p-0 texto-carotSans--Light" style="color: #FFFFFF; font-size: 20px;"
            >Acerca de nosotros</a
          >
        </li>
        <div class="container">
          <div class="row">
            <div class="col">
              <li class="nav-item">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/facebook.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
            <div class="col">
              <li class="nav-item">
                <a href="#" class="nav-link p-0 text-muted"
                  ><img src="{{ asset('img/assets/aplicacionCliente/instagram.svg')}}" alt="" srcset=""
                /></a>
              </li>
            </div>
          </div>
        </div>
      </ul>
    </div>
    <div class="col-auto pb-1" style="margin: 30px">
      <form>
        <div class="mb-3">
          <h5 style="color: #518B27;">Contactanos</h5>
        </div>
        <!-- <div class="mb-3">
          <div class="d-flex w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Contactanos</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email">
            <input id="newsletter1" type="text" class="form-control" placeholder="Comentarios">
            <button class="btn btn-primary" type="button">Enviar</button>
          </div>
        </div> -->
        <div class="mb-3">
          <div class="d-flex w-100 gap-1">
            <!-- <input id="newsletter1" type="text" class="form-control" placeholder="Email"> -->
            <input
              type="text"
              class="form-control"
              aria-label="Sizing example input"
              aria-describedby="inputGroup-sizing-lg"
              placeholder="Email"
              size="38"
            />
          </div>
        </div>
        <div class="mb-3">
          <div class="d-flex w-100 gap-2">
            <div class="form-floating">
              <textarea
                class="form-control"
                placeholder="Leave a comment here"
                id="floatingTextarea2"
                style="height: 100px; resize: none;"
                rows="4"
                cols="40"
              ></textarea>
              <label for="floatingTextarea2">Comentario</label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <div>
            <button class="btn" type="button" style="background-color: #4a9d22; float: right; color: #FFFFFF;">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div
    class="row justify-content-center"
    style="margin: 0px 15px 0px 15px; color: #FFFFFF;"
  >
    <div
      class="col-auto pb-5"
      
    >
      <p>&copy;2022 Dinero inmediato | Todos los derechos reservados.</p>
    </div>
  </div>
  <!-- <div class="d-flex justify-content-center py-3 my-3" style="color: white;">
    <p>&copy;2022 Dinero inmediato | Todos los derechos reservados.</p>
  </div> -->
</footer>