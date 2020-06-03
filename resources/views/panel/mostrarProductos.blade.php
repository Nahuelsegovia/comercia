<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar producto</title>
</head>
<body>
<div>
    @foreach($productos as $producto)
        <a href="/producto/{{$producto->id}}">{{$producto->titulo_producto}}</a> <br>
    @endforeach()
    </div>
</body>
</html>