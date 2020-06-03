<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar producto</title>
</head>
<body>
    <form action="/editar/{{$producto->id}}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="nuevoTituloProducto">
    <input type="text" name="nuevaDescripcionProducto">
    <input type="submit" value="Editar">    
    </form>
</body>
</html>