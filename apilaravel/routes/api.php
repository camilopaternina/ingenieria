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

/**
 * Rutas para los productos y su interacción
 */

Route::get('/producto' , 'App\Http\Controllers\productoController@index');
Route::get('/producto/{id}' , 'App\Http\Controllers\productoController@show');
Route::get('/producto/{id}' , 'App\Http\Controllers\productoController@destroy');
Route::get('/producto/categoria/{id}', 'App\Http\Controllers\productoController@show');
Route::post('/producto', 'App\Http\Controllers\CategoriaController@show');
Route::get('/categorias', 'App\Http\Controllers\CategoriaController@index');

/**
 * Rutas para la gestión de usuarios
*/

Route::post('/nuevousuario', 'App\Http\Controllers\autenticatioController@registre');
Route::post('/login', 'App\Http\Controllers\autenticatioController@login');

/**
 * Rutas para la gestión de busquedas
 */

 Route::post('/busqueda', 'App\Http\Controllers\busquedaController@store');

/**
 * Rutas protegidas
 */

Route::group(['middleware' => ['auth:sanctum'] ], function(){

    Route::post('/cerrarsesion', 'App\Http\Controllers\autenticatioController@logout');
    Route::post('/mydata/{id}', 'App\Http\Controllers\autenticatioController@mydata');
    Route::get('/micarrito/{id}','App\Http\Controllers\carritoController@show');
    Route::put('producto/{id}', 'App\Http\Controllers\productoController@update');
    Route::put('');
});