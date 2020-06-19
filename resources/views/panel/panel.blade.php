
@extends('layout')

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
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav menupanel">
                                            <li>
                                                <a href="index.html"></a>
                                            </li>
                                           
                                                <a href="" class="nombreTienda">
                                                Usuario : {{$usuario->nombre_tienda}}
                                                </a>

                                                <a href="/mostrarproductos">
                                                Mis productos
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
        <form action="crearProducto" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Titulo del producto" name="tituloProducto">
            <br>
            <br>
            <input type="text" class="form-control" placeholder="Descripcion del producto" name="descripcionProducto">
            <input type="text" class="form-control" placeholder="Precio del producto" name="precioProducto">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categría del producto</label>
            <select class="form-control" name="categoriaProducto">
            <option value="comidas">Comidas</option> 
            <option value="ropa" selected>Ropa</option>
            <option value="tecnologia">Tecnología</option>
            <option value="farmacia">Farmacia</option>
            <option value="tecnologia">Ferretería</option>
            <option value="bebidas">Bebidas</option>
            <option value="cosmeticos">Cosméticos</option>
            <option value="servicios">Servicios</option>
            </select>
        </div>
        <input type="file" name="fotoProducto"/>
        <input type="submit" value="Subir producto">
</form>

@endsection

