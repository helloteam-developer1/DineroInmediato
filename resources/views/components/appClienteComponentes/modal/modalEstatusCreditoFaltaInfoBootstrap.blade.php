<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Modal Falta Información</title>
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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Abrir Estatus de crédito - Falta Información
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">
            <!-- style="border: none;" -->
            <h1 class="modal-title col-11 text-center p-3 texto-carotSans--Medium" id="exampleModalLabel" style="color: #4A9D22; font-size: 40px;">Estatus de crédito</h1>
            <!-- <h1 class="modal-title col-11 text-center p-3 texto-carotSans--Medium" id="exampleModalLabel" style="color: #4A9D22; font-size: 40px; margin-left: 40px;">Estatus de crédito</h1> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>            
        </div>
        <div class="modal-body" style="text-align: center;">
          <p class="texto-carotSans--Medium" style="font-size: 30px; color: #F5A733;">Falta información que completar o es incorrecta</p>
          <p class="texto-carotSans--Regular" style="font-size: 25px; color: #474747;">“Breve mensaje del administrador”</p>
        </div>
        <div class="modal-footer" style="border: none;">
          <div class="container-fluid h-100"> 
    		    <div class="row w-100 align-items-center">
    			    <div class="col text-center">
    				    <button class="btn regular-button texto-carotSans--Medium" style="background-color:  #4A9D22; color: #FFFFFF;">Cancelar</button>
    				    <!-- <button class="btn regular-button texto-carotSans--Medium" style="background-color:  #4A9D22; color: #FFFFFF; margin-right: 50px;">Cancelar</button> -->
    				    <button class="btn regular-button texto-carotSans--Medium" style="background-color:  #F5A733; color: #FFFFFF;">Haz clic aquí para terminar de completar tu información</button>
    				    <!-- <button class="btn regular-button texto-carotSans--Medium" style="background-color:  #F5A733; color: #FFFFFF; margin-left: 70px;">Haz clic aquí para terminar de completar tu información</button> -->
              </div>	
    		    </div>
    	    </div>
          <!-- <center>
            <button class="btn btn-primary texto-carotSans--Medium" type="button" style="background-color:  #4A9D22;">Aceptar</button>
          </center> -->
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