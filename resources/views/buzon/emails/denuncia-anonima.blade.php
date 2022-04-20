<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <p><strong>Recibiste una nueva:</strong> {{$msg['tipo']}}</p>
    <p><strong>Folio No.</strong> {{$msg['folio']}}</p>
    <p><strong>Modo de Canal:</strong> {{$msg['canal']}}</p>
    <p><strong>Categoria:</strong> {{$msg['categoria']}}</p>

    @if($msg['name'])
    <h3>Información Personal</h3>

    <p><strong>Nombre:</strong>  {{$msg['name']}}</p>
    @endif

    @if($msg['paterno'])
    <p><strong>Apellido Paterno:</strong>  {{$msg['paterno']}}</p>
    @endif
    
    @if($msg['materno'])
    <p><strong>Apellido Materno</strong>  {{$msg['materno']}}</p>
    @endif

    @if($msg['telefono'])
    <p><strong>Telefono</strong>  {{$msg['telefono']}}</p>
    @endif

    @if($msg['email'])
    <p><strong>Apellido Materno</strong>  {{$msg['email']}}</p>
    @endif

    <h3>Información de Cliente</h3>

    <p><strong>¿Es cliente o proveedor?:</strong> {{$msg['isClient']}}</p>

    @if($msg['razon_social'])
    <p><strong>Razón Social</strong>  {{$msg['razon_social']}}</p>
    @endif

    <p><strong>Texto de los Hechos:</strong></p>
    <p>{{$msg['hechos']}}</p>


    <div>
        <div>
            <p><a href="https://www.veladoras-aramo.com/" target="_blank" rel="noopener noreferrer">Veladoras-Aramo.com</a> </p>
        </div>

    </div>
    
    

</body>
</html>