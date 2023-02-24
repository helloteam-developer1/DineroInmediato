<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modal instrucciones</title>
    <style>
    @font-face {
        font-family: 'CarotSans-Medium';
        src: url("./fonts/CarotSans-Medium.otf") format('woff');
    }
    @font-face {
        font-family: 'CarotSans-Regular';
        src: url("./fonts/CarotSans-Regular.otf") format('woff');
    }
    .texto-carotSans--Medium{
        font-family: 'CarotSans-Medium';
    }
    .texto-carotSans--Regular{
        font-family: 'CarotSans-Regular';
    }
    </style>
  </head>
  <body>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalInstrucciones">
    Abrir Instrucciones
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
            <h1 class="modal-title col-11 text-center" id="exampleModalLabel" style="color: #4A9D22; font-size: 40px;">Instrucciones</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ms-5 me-5">
          <p>Tu crédito fue aprobado. Para comenzar, ingresa tu tarjeta de nómina, es ahí
            donde depositaremos el dinero del préstamo. También, es ahí donde mes a mes
            pagarás tus mensualidades. Para conocer los detalles del crédito entra en la
            sección“Documentación e información”.</p>
        </div>
        <div class="modal-footer" style="border: none;">
          <div class="container-fluid h-100"> 
          	<div class="row w-100 justify-content-between">
    			<div class="col-3 text-center">
                		<button class="btn regular-button texto-carotSans--Medium" type="button" style="background-color: #4A9D22; color: #FFFFFF;">Cancelar</button>
</div>			<div class="col-5 text-center">
                		<button class="btn regular-button texto-carotSans--Medium" type="button" style="background-color:  #F5A733; color: #FFFFFF; ">Documentación e información</button>
			</div>	
    		</div>
    	    </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>