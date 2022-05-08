<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
</head>
<body>
    
    <p><strong>Nombre del Usuario:</strong> {{$msg['name']}}</p>
    <p><strong>Número de Contacto:</strong> {{$msg['telefono']}}</p>
    <p><strong>Correo Electrónico</strong> {{$msg['email']}}</p>
    <p><strong>Asunto a tratar:</strong> {{$msg['asunto']}}</p>
    <p><strong>Mensaje:</strong></p>
    <p>{{$msg['texto']}}</p>
</body>
</html>