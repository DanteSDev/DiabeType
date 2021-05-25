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
    return view('/consulta');
});

//Rutas para login
Route::get('/login', ['as'=>'SweetAlert','uses'=>'App\Http\Controllers\usuariosController@inicio']);

Route::post('/vistaPrincipal', 'App\Http\Controllers\usuariosController@acceso');

//Rutas para registro
Route::get('/register','App\Http\Controllers\usuariosController@registro');

Route::post('/register','App\Http\Controllers\usuariosController@crearUsuario');

//Rutas para captura
Route::get('/captura','App\Http\Controllers\usuariosController@consulta');

Route::post('/captura','App\Http\Controllers\usuariosController@capturaGlucosas');

//Rutas para vistaPrincipal
Route::get('/vistaPrincipal','App\Http\Controllers\usuariosController@vistaPrincipal');

//Route::post('/vistaPrincipal','App\Http\Controllers\usuariosController@vistaPrincipal');

//Rutas para cerrar sesion
Route::get('/cerrarSesion','App\Http\Controllers\usuariosController@cerrarSesion');

Route::post('/cerrarSesion','App\Http\Controllers\usuariosController@acceso');
//Rutas para pagina principal y contenido
//Route::get('/inicio', 'App\Http\Controllers\usuariosController@acceso')

//Rutas para consulta
Route::get('/consulta','App\Http\Controllers\usuariosController@consultaShow');

Route::post('/consulta','App\Http\Controllers\usuariosController@consultaFecha');