<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buzon de Aram-Luz</title>
</head>
<body>

    Contenido del correo

    <p>Recibiste una nueva: {{$msg['tipo']}}</p>
    <p><strong>Modo de Canal:</strong> {{$msg['canal']}}</p>
    <p><strong>Categoria:</strong> {{$msg['categoria']}}</p>

    <p>Es cliente?: {{$msg['isClient']}}</p>

    <p>{{$msg['hechos']}}</p>
    

</body>
</html>