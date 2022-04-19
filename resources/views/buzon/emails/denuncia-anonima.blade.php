<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    <p><strong>Recibiste una nueva:</strong> {{$msg['tipo']}}</p>
    <p><strong>Modo de Canal:</strong> {{$msg['canal']}}</p>
    <p><strong>Categoria:</strong> {{$msg['categoria']}}</p>

    <p><strong>¿Es cliente o proveedor?:</strong> {{$msg['isClient']}}</p>

    <p><strong>Texto de los Hechos:</strong></p>
    <p>{{$msg['hechos']}}</p>


    <div class="flex flex-row">
        <div>
            <img src="http://localhost/Portal/public/img/Aramo.png" alt="Veladoras Aramo">
            
        </div>
        <div>
            <p style="color: blue;"><h4>Veladoras Aramo</h4></p>
            <p><a href="https://www.veladoras-aramo.com/" target="_blank" rel="noopener noreferrer">Veladoras-Aramo.com</a> </p>
        </div>

    </div>
    
    

</body>
</html>