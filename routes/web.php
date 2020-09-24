<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'InicioController@inicio');
Route::post('/', 'ContactoController@newsletter');
Route::get('/sobre-nosotros', 'SobreNosotrosController@sobreNosotros');
Route::get('/servicios', 'ServiciosController@servicios');
Route::get('/productos', 'ProductosController@productos');
Route::get('/productos/{categoria}', 'TiendaController@show');
Route::get('/contacto', 'ContactoController@contacto');
Route::post('/contacto', 'ContactoController@enviar_mail');
Route::get('/novedades', 'NovedadController@novedades');
Route::post('/productos/{categoria}', 'TiendaController@show');


//Route::get('/', 'sobreNosotrosController@sobreNosotros');
