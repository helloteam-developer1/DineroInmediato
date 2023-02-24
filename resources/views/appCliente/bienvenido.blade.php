<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Mi prestamo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />--}}
    <!-- Favicon -->
    <link rel="icon" href="./img/assets/aplicacionCliente/Grupo 946.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        @font-face {
            font-family: 'CarotSans-Medium';
            src: url("../fonts/CarotSans-Medium.otf") format('woff');
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

        /* .containerUno{
            display: flex;
        }
        .containerUno div:nth-of-type(1) {
        order: 4;
            }
            
            .boxes button:nth-of-type(2) {
                order: 3;
            }
            
            .boxes button:nth-of-type(3) {
                order: 2;
            }
            
            .boxes button:nth-of-type(4) {
                order: 1;
            } */
        /*Responsivo para Moviles*/
        @media (max-width: 400px) {
            footer {
                /* flex-direction: column-reverse; */
                margin: auto;


            }

            /* input, textarea{
                width: 100%;
                height: 100%;
                margin: 20px 0px 20px 0px;
            } */
            /* .form-control{
                margin: 20px 0px 20px 0px;
            } */
            /* .row{
                margin: 20px 0px 20px 0px;
            } */
        }

        /*Responsivo para Tablets*/
        @media (min-width: 400px) and (max-width: 1024px) {
            footer {
                /* flex-direction: column-reverse; */
                margin: auto;
            }

            /* input, textarea{
                width: 100%;
                height: 100%;
            } */
            /* .form-control{
                margin: 20px 0px 20px 0px;

            } */
        }

        /*Responsivo para Escritorio*/
        @media (min-width: 1025px) and (max-width: 1980px) {
            footer {
                /* flex-direction: column-reverse; */
                margin: auto;

            }
        }

        /*Responsivo para Full Hd*/
        @media (min-width: 1981px) {
            footer {
                margin: auto;

            }

            /* .form-control{
                margin: 20px 0px 20px 0px;

            } */
        }


        @media screen and (min-width: 600px) {
            .boxes {
                display: flex;
            }

            .boxes button:nth-of-type(1) {
                order: 4;
                background: #474747;
                border: none;
            }

            .boxes button:nth-of-type(2) {
                order: 3;
            }

            .boxes button:nth-of-type(3) {
                order: 2;
            }

            .boxes button:nth-of-type(4) {
                order: 1;
            }
        }
    </style>
</head>
<body>
    
    <center>
        <h1>Bienvenido: {{Auth::user()->nombre;}}</h1>
        <h2>Información</h2>
    </center>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-dark table-striped-columns">
                <tbody>
                    <tr>
                        <th>"nombre"</th>
                        <th>{{Auth::user()->nombre}}</th>
                    </tr>
                    <tr>
                        <th>"curp"</th>
                        <th>{{Auth::user()->curp}}</th>
                    </tr>
                    <tr>
                        <th>"fecha_nacimiento"</th>
                        <th>{{Auth::user()->fecha_nacimiento}}</th>
                    </tr>
                    <tr>
                        <th>"empresa_trabajo"</th>
                        <th>{{Auth::user()->empresa_trabajo}}</th>
                    </tr>
                    <tr>
                        <th>"rama_empresa"</th>
                        <th>{{Auth::user()->rama_empresa}}</th>
                    </tr>
                    <tr>
                        <th>"antiguedad"</th>
                        <th>{{Auth::user()->antiguedad}}</th>
                    </tr>
                    <tr>
                        <th>"banco_nomina"</th>
                        <th>{{Auth::user()->banco_nomina}}</th>
                    </tr>
                    <tr>
                        <th>"telefono_contacto"</th>
                        <th>{{Auth::user()->telefono_contacto}}</th>
                    </tr>
                    <tr>
                        <th>"email"</th>
                        <th>{{Auth::user()->email}}</th>
                    </tr>
                    <tr>
                        <th>"ine_frente"</th>
                        <th><img src="{{Auth::user()->ine_frente}}" style="width: 50%; height:auto;"></img></th>
                    </tr>
                    <tr>
                        <th>"ine_reverso"</th>
                        <th><img src="{{Auth::user()->ine_reverso}}" style="width: 50%; height:auto;"></img></th>
                    </tr>
                    <tr>
                        <th>"comp_dom"</th>
                        <th><img src="{{Auth::user()->comp_dom}}" style="width: 50%; height:auto;"></img></th>
                    </tr>
                    <tr>
                        <th>"foto_cine"</th>
                        <th><img src="{{Auth::user()->foto_cine}}" style="width: 50%; height:auto;"></img></th>
                    </tr>
                    <tr>
                        <th>"prestamo"</th>
                        <th>{{Auth::user()->prestamo}}</th>
                    </tr>
                    <tr>
                        <th>"tiempo"</th>
                        <th>{{Auth::user()->tiempo}}</th>
                    </tr>
                    <tr>
                        <th>"trabajo"</th>
                        <th>{{Auth::user()->trabajo}}</th>
                    </tr>
                    <tr>
                        <th>"ingreso"</th>
                        <th>{{Auth::user()->ingreso}}</th>
                    </tr>
                    <tr>
                        <th>"nomina"</th>
                        <th>{{Auth::user()->banco_nomina}}</th>
                    </tr>
                    <tr>
                        <th>"credito"</th>
                        <th>{{Auth::user()->credito}}</th>
                    </tr>
                    
                </tbody>
            </table>
            <center>
                <form action="/logout" method="POST" style="border: 1px solid black;">
                    @csrf
                    <a class="dropdown-item" href="#" onclick="this.closest('form').submit()">
                      <img class="me-2" src="{{ asset('img/assets/aplicacionCliente/Grupo 948.png')}}" alt="">
                      Cerrar Sesión
                    </a>
                  </form>
            </center>
        </div>
        <div class="col-2"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>

    