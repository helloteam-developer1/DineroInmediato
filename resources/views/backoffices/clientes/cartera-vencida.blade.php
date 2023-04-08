<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clientes</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/backoffices/Grupo 979.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/backoffice/style.css') }}">
    <script src="https://kit.fontawesome.com/7652a6e854.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireStyles
</head>

<body>
    {{--Nav Bar menu con ajustes--}}
    <x-backoffice.menu-backoffice />
    <h1 class="text-center my-5">Clientes</h1>
    {{--Menu para el backoffice solicitud, clientes vigentes, Crédito Finalizado, Cartera Vencida--}}
    <x-backoffice.menu-clientes />
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                        <div class="table-responsive text-center">
                        <!--inicio tabla de cartera--->
                            <table class="table table-bordered border-secondary" >
                                <thead>
                                    <tr class="table-secondary">
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Número de cliente</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Núm de crédito</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Nombre</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Teléfono</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Correo Electronico</p>
                                        </th>
                                            <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Regularizar cliente</p>
                                        </th>
                                        <th scope="col" class="px-5">
                                            <p class="encabezado-tabla-medio">Tabla de pagos</p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>Datos</td>
                                        <td>
                                            <button class="btn buton-color px-4 mx-4" data-bs-toggle="modal" data-bs-target="#regularizarCliente">
                                            Regurizar
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn boton-color px-4 mx-4">
                                                <a href="/tablaDePagos" style="text-decoration: none; color:white;">Ver</a>
                                            </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        <!--fin tabla de cartera--->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @extends('backoffices.components.footer')
    @livewireScripts
    <!-- scripts --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        Livewire.on('alert', function() {
            Swal.fire({
                icon: 'success',
                title: 'Cambio con Exito',
                footer:'Espere...',
                showConfirmButton: false,
                timer: 1500,
            });
            setTimeout(() => {
                location.reload();
            }, 1600);
        });
        
    </script>
</body>
</html>