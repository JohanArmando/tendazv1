<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{font-family: "Roboto", Helvetica, Arial, sans-serif}
        .bor { border: 1px solid lightgrey;margin: 5px;border-radius: 5px; padding: 10px;width: 35%}
        .max{max-width: 200px}
        .btn-ten{background-color: #f26522; text-decoration:none; border: 1px solid #f26522;border-radius: 0;color: white;padding: 8px }
        .ten{border-top: 1px solid #f26522}
        .footer{color: darkgrey !important;}
        .text-center{text-align: center}
    </style>
</head>
<body>
    <div class="container bor">
        <div class="row">
            <div class="col-md-12"></div>
            <div class="col-md-12">
                <img src="https://tendaz.com/tendaz/img/logo_tendaz.png"  class="img-responsive max" alt="">
            </div>
            <div class="col-md-12">
                <h3><strong>Hola {{ $name_client }}</strong></h3><br>
            </div>
            <div class="col-md-12">
                <p>{{ $text }}, <strong>Revisa tu informaci&oacute;n:</strong></p><br>
            </div>
            <div class="col-md-12 text-center">
                <a class="btn-ten" href="{{ $url }}">IR A MI TIENDA</a>
            </div>
            <div class="col-md-12">
                <br>
                <p> Si usted no solicit&oacute; esto, simplemente ignore o elimine este mensaje.</p><br>
                <p><strong>Gracias!</strong></p>
            </div>
            <div class="col-md-12 text-center">
                <hr class="ten">
                <p class="footer">Este correo no puede recibir respuestas, por favor, no responda.</p>
            </div>
        </div>
    </div>
</body>
</html>
