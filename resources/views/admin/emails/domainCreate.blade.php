<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    @if($error == 'NONE')
        <h1>El equipo de tendaz te Desea:</h1>
        Felicidades {{ $user->name  }}.
        Has agregado el dominio {{ $domain }}.
        Disfruta al maximo de tu tienda
    @else
        <h3>Opps!</h3>
        {{ $user->name }} Ha ocurrido un error al agregar el dominio {{ $domain }}
        <br>
        Comunicate con support@tendaz.com, si tienes algun problema en la activacion de tu dominio.
    @endif
</body>
</html>