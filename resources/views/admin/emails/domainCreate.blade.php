<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    @if($error == 'NONE')
        <h1>El equipo de tendaz te Desea:</h1>
        Felicidades {{ $user->full_name  }}.
        Has agregado el dominio {{ $domain }}.
        Disfruta al maximo de tu tienda
    @else
        <h3>Opps!</h3>
        {{ $user->full_name }} Ha ocurrido un eror al agregar el dominio {{ $domain }}
        <br>
        Comunicate con support@tendaz.com, si tienes algun problema en la activacion de tu dominio.
    @endif
</body>
</html>