<?php 

namespace App\Repositories;
use Illuminate\Support\Facades\Auth;

use App\Models\Producto;

class ProductoRepository extends BaseRepository
{
    public function getModel()
    {
        return new Producto;
    }

    public function crear($datos)
    {
        $usuario = Auth::user();

        $nuevoProducto = new Producto;

        $nuevoProducto->titulo_producto = $datos->tituloProducto;
        $nuevoProducto->descripcion_producto = $datos->descripcionProducto;

        //$nuevoProducto->estado()->associate($estado); = $estado->id;

        if($datos->file('fotoProducto')){
            $file = $datos->file('fotoProducto');
            $file->store('public/images');
            $nuevoProducto->foto_producto = $file->hashName();
        }
        $nuevoProducto->categoria_producto = $datos->categoriaProducto;
        $nuevoProducto->precio_producto = $datos->precioProducto;
        $nuevoProducto->id_usuario = $usuario->id; 
        $nuevoProducto->save();

        return $nuevoProducto;
    }

}