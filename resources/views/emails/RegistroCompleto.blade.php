<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            font-family: "Goudy Bookletter 1911", sans-serif;
        }
        .naranja{
            color: #F29100;
            font-weight: 800;
        }
        .contenedor{
            margin: 40px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <head>
        <div>
            
            <h1 class="naranja" style="text-align:left;"><img src="./img/Grupo24.png" style=" margin-right:260px;">Registro completo</h1>
        </div>        
    </head>
    <div class="contenedor">
        <p>Se ha registrado exitosamente en la aplicación "Dinero Inmediato" sus datos de acceso son: 
        </p>
        <b class="naranja">Usuario: {{$usuario['email']}}</b>
        <br />
        <b class="naranja">Password: {{$usuario['password']}}</b>
    </div>
    
   
</body>
</html>