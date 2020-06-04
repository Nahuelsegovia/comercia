<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto individual</title>
</head>
<body>
    <form action="/eliminar/{{$producto->id}}" method="post">
        @method('DELETE')
        @csrf
        <h1>{{$producto->titulo_producto}}</h1>
        <h1>{{$producto->descripcion_producto}}</h1>
        <img src="{{ route('imagen.ver', $producto->foto_producto) }}" alt="lalal">
        <input type="submit" value="Eliminar producto">
        </form>
    <form action="/editar/{{$producto->id}}" method="get">
    <input type="submit" value="Editar producto">
    </form>
</body>
</html>