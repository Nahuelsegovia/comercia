<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/crearProducto" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="tituloProducto">
        <input type="textarea" name="descripcionProducto">
        <input type="file" name="fotoProducto" />
        <input type="submit" value="Subir producto">
    </form>
</body>
</html>