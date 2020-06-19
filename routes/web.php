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
Auth::routes();

Route::get('/', 'PanelController@home');

Route::get('/imagen/{rutaImage}', 'PanelController@viewImage')->name('imagen.ver');
Route::get('/mostrarproductos', 'PanelController@mostrarProductos');
Route::post('/categoria', 'PanelController@comprar');

Route::middleware('auth')->group(function(){

    Route::get('/panel', 'PanelController@indexPanel');

    Route::post('/crearProducto', 'PanelController@crearProducto');

    Route::get('/producto/{id}', 'PanelController@producto');

    Route::get('/eliminar/{id}', 'PanelController@eliminar')->name('eliminar.producto');

    Route::get('/editar/{id}', 'PanelController@editar');

    Route::put('editar/{id}', 'PanelController@update');

    Route::get('/home', 'HomeController@index')->name('home');

});

