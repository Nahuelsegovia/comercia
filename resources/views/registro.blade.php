<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empezar a vender</title>
</head>
<body>
    <form action="{{ route('registrar.tienda') }}" method="post">
    @csrf
    <input type="text" name="usuario">
    <input type="text" name="contrasenia">
    <input type="text" name="nombreTienda">
    <input type="submit" value="Registrar tienda">
    </form>
</body>
</html>