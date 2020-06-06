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
        <select name="categoriaProducto">
            <option value="comidas">Comidas</option> 
            <option value="ropa" selected>Ropa</option>
            <option value="tecnologia">Tecnología</option>
            <option value="farmacia">Farmacia</option>
            <option value="tecnologia">Ferretería</option>
            <option value="bebidas">Bebidas</option>
            <option value="cosmeticos">Cosméticos</option>
            <option value="servicios">Servicios</option>
        </select>
        <input type="submit" value="Subir producto">
    </form>
</body>
</html>