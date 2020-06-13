<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App;
use Response;

class PanelController extends Controller
{
    public function home(){
        $productos = App\Models\Producto::latest()->take(10)->get();
        return view('/index', compact('productos'));
    }


    public function indexPanel(){
        $usuario = Auth::user();
        return view('/panel/panel', compact('usuario'));
    }

    public function crearProducto(Request $request){
        $usuario = Auth::user();
        $nuevoProducto = new App\Models\Producto;
        $nuevoProducto->titulo_producto = $request->tituloProducto;
        $nuevoProducto->descripcion_producto = $request->descripcionProducto;
        if($request->file('fotoProducto')){
            $file = $request->file('fotoProducto');
            $file->store('public/images');
            $nuevoProducto->foto_producto = $file->hashName();
        }
        $nuevoProducto->categoria_producto = $request->categoriaProducto;
        $nuevoProducto->precio_producto = $request->precioProducto;
        $nuevoProducto->id_usuario = $usuario->id; 
        $nuevoProducto->save();
        return redirect('/mostrarproductos');
    }

    public function viewImage($rutaImage)
    {
        $title = "";
        $image = storage_path('app') . '/public/images/' . $rutaImage;
        return Response::download($image, $title, [], 'inline'); // aca, que es ? 
    }
    
    public function mostrarProductos(){
        $usuario = Auth::user();
        $productos = App\Models\Producto::where('id_usuario', $usuario->id)->get();
        return view('/panel/mostrarProductos', compact('productos'));
        return view('/index', compact('productos'));
    }

    public function producto($id){
        $prod = new App\Models\Producto;
        $producto = $prod->findOrFail($id);
        return view('/panel/producto', compact('producto'));
    }

    public function eliminar($id){
        $producto = App\Models\Producto::findOrFail($id);
        $producto->delete();
        return redirect('/mostrarproductos');
    }

    public function editar($id){
        $producto = App\Models\Producto::findOrFail($id);
        return view('panel/editar', compact('producto'));
    }

    public function update(Request $request, $id){
        $producto = App\Models\Producto::findOrFail($id);
        $producto->titulo_producto = $request->nuevoTituloProducto;
        $producto->descripcion_producto = $request->nuevaDescripcionProducto;
        $producto->save();
        return redirect('/mostrarproductos');
    }

   
    public function comprar(){
        echo 'Hola compra';
    }
}





