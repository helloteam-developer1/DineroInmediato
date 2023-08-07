<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <style>
    table, td, div, h1, p {
      font-family: 'Open Sans', sans-serif;
    }

    .btn{
        background-color: #39A935 /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
    }
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap'); 
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: white;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
      h1{
        font-size: 30px;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
      h1{
        font-size: 30px;
      }
    }
  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:white;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:white;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
            <tr>
              <td style="padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;">
                <a href="jcst.hellomexico.mx" style="text-decoration:none;"><img src="https://prueba.dineroinmediato.mx/img/logo.png" width="165" style="width:165px;max-width:80%;height:auto;border:none;text-decoration:none;color:#ffffff;"></a>
                <h1 style="color:#39A935;">App Dinero Inmediato</h1>
              </td>
            </tr>
            <tr>
              <td style="padding:0px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);">
                <div class="col-lge" style="display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">
                  <p style="margin-top:-10px;margin-bottom:12px;">
                    Su contraseña ha sido modificada con éxito. En caso de que usted no haya realizado este cambio haga clic 
                   <a href="{{ route('change-password',$token) }}">aquí</a> para restablecer su contraseña
                  </p>
                  <center>
                    <a class="btn" href="{{  route('change-password', $token)  }}" style="border-radius: 4px;color:white; background-color:#39A935;">Cambiar Password</a>
                  </center>
                  <p style="margin-top:40px;margin-bottom:8px;"> Dinero inmediato 2023 todos los derechos reservados. Si usted no se registró en la aplicación y por error le llegó este correo, haga caso omiso.</p>
                </div>
              </td>
            </tr>
            <tr>
              <td style="padding:30px;text-align:center;font-size:12px;background-color:#39A935;color:#cccccc;">
                <p style="margin:0 0 8px 0;"><a href="http://www.facebook.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/facebook_1.png" width="40" height="40" alt="f" style="display:inline-block;color:#cccccc;"></a> <a href="http://www.twitter.com/" style="text-decoration:none;"><img src="https://assets.codepen.io/210284/twitter_1.png" width="40" height="40" alt="t" style="display:inline-block;color:#cccccc;"></a></p><br />
                <p>Si usted no se registró en la aplicación y por error le llegó este correo, haga caso omiso.
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </div>
</body>
</html>

