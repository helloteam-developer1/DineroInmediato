<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Notificaciones</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/ICONO_NOTIFICACIONES.svg') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <x-backoffice.menu-backoffice />
    
    <livewire:backoffice.notificacion />

    @extends('backoffices.components.footer')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/backoffice/menuBurger.js') }}"></script>
    <script>
      Livewire.on('alert', function(){
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Notificación enviada!',
        showConfirmButton: false,
        timer: 1500
      });
        setTimeout(() => {
          location.reload();
        }, 1600);
      });
    </script>
</body>
</html>
