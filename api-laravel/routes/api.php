<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Producto' , 'App\Http\Controllers\ProductoController@index');
Route::get('/venta/{Id_producto}' , 'App\Http\Controllers\ProductoController@seleccionProducto');
Route::get('/Producto/{id}' , 'App\Http\Controllers\ProductoController@getProductosCategoria');
Route::get('/Producto/Database/{nombre}' , 'App\Http\Controllers\ProductoController@getProductosNombre');
 
Route::get('/usuario/{id}' , 'App\Http\Controllers\AtenticacionController@getUsuername');
Route::get('/Categoria' , 'App\Http\Controllers\CategoriaCotroller@index');
Route::post('/Categoria' , 'App\Http\Controllers\CategoriaCotroller@store');
Route::put('/Categoria' , 'App\Http\Controllers\CategoriaCotroller@update');
Route::delete('/Categoria' , 'App\Http\Controllers\CategoriaCotroller@destroy');
Route::post('/nuevousuario', 'App\Http\Controllers\AtenticacionController@registro');
Route::post('/login', 'App\Http\Controllers\AtenticacionController@login');

Route::group(['middleware' => ['auth:sanctum'] ], function(){
    Route::post('/cerrarsesion', 'App\Http\Controllers\AtenticacionController@logout');
    Route::get('/Comprausuario/{id}' , 'App\Http\Controllers\ComprasController@getComprasUsuario');
    Route::get('/Compra/{id}/{idPedido}/{idProducto}' , 'App\Http\Controllers\ComprasController@getCompra');
    Route::post('/Compra' , 'App\Http\Controllers\ComprasController@store');
    Route::get('/Pedido' , 'App\Http\Controllers\PedidoController@index');
    Route::get('/Valoracion/{id}' , 'App\Http\Controllers\ValoracionController@show');
    Route::post('/Valoracion' , 'App\Http\Controllers\ValoracionController@store');
    Route::get('/Pedido/{id}' , 'App\Http\Controllers\PedidoController@show');
    Route::get('/my' , 'App\Http\Controllers\AtenticacionController@datos');
    Route::get('/usuario/{id}' , 'App\Http\Controllers\AtenticacionController@getUsuername');
    Route::post('/Producto', 'App\Http\Controllers\ProductoController@store');
    Route::put('/Producto/{Id_productos}', 'App\Http\Controllers\ProductoController@update');
    Route::delete('/Producto/{Id_productos}', 'App\Http\Controllers\ProductoController@dest
    roy');
    Route::post('/Pedido', 'App\Http\Controllers\PedidoController@store');
    Route::put('/Pedido/{Id_pedido}', 'App\Http\Controllers\PedidoController@update');
    Route::delete('/Pedido/{Id_pedido}', 'App\Http\Controllers\PedidoController@destroy');
});


