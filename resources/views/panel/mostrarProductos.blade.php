@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Productos</title>
</head>
<body style="background: #1f1f1f;">
<div id="main-menu" class="wa-main-menu">
                <!-- Menu -->
                <div class="wathemes-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default navbar-bg-dark" role="navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="navbar-header pad-top15 pad-bottom15">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span>
                                        </button>
                                        
                                        <a class="navbar-brand hidden-sm hidden-md hidden-lg logo-second" href="index.html">
                                        <img class="site_logo" alt="Site Logo" src="assets/img/menu-logo.png">
                                        </a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse menupanel">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav">
                                            <li>
                                                <a href="index.html"></a>
                                            </li>
                                           
                                                <a href="" class="nombreTienda">
                                                Usuario : {{$usuario->nombre_tienda}}
                                                </a>

                                                <a href="/panel">
                                                Publicar
                                                </a>
                                            </li>
                                            <li>
                                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <input type="submit" value="Cerrar sesión" style="border:none; background:#1f1f1f;">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- navbar-collapse -->
                                </div>

@section('contenido')
<div class="formulario login p-4">
@foreach($productos as $producto)
            <div class="misProductos">
                <h1>{{$producto->titulo_producto}}</h1>
                <p>{{$producto->descripcion_producto}}</p>
                <p>{{$producto->id}}</p>
            </div>

            <div class="botonesMisProductos d-flex flex-row">
                <form action="/editar/{{$producto->id}}" method="get">
                <input type="hidden" value="{{$producto->id}}">
                <input type="submit" value="Editar producto">
                </form>

                <form action="/eliminar/{{$producto->id}}" method="get">
                <input type="hidden" value="{{$producto->id}}">
                <input type="submit" value="Eliminar producto">
                </form>
            </div>
            <hr>

        @endforeach
</div>

@endsection
</body>
</html>