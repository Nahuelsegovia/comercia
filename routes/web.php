<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/panel', 'PanelController@index')->middleware('is_admin');

Route::post('/crearProducto', 'PanelController@crearProducto');

Route::get('/mostrarproductos', 'PanelController@mostrarProductos');

Route::get('/producto/{id}', 'PanelController@producto');

Route::any('/eliminar/{id}', 'PanelController@eliminar');

Route::get('/editar/{id}', 'PanelController@editar');

Route::put('editar/{id}', 'PanelController@update');

Route::get('/imagen/{rutaImage}', 'PanelController@viewImage')->name('imagen.ver');