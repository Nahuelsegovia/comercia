@extends('layout')

    @section('contenido')
    <div class="formulariologin p-4" style="background: #1bbc9b;">
            <form action="/login" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Nombre de usuario" name="nombreUsuario">
                <br>
                <input type="password" class="form-control" placeholder="Contraseña" name="contraseniaUsuario">
            </div>
            <input type="submit" value="Iniciar sesion" class="boton">
    </form>
    @endsection