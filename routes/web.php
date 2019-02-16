<?php

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

    return view('web.index');
});


Route::resource('venta','VentaController');

Route::resource('servicio','tiposerviciocontroller');
Route::resource('Registro', 'imagencontroller');
Route::resource('usuario','usuarioController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/','imagencontroller@listar');
Route::get('actualizar/{id_imagen}','imagencontroller@cargar');

Route::get('servicioInactivo','tiposerviciocontroller@inactivo');
Route::get('delete/{id_tiposervicio}','tiposerviciocontroller@eliminar');

Route::get('eliminar/{id_imagen}','imagencontroller@Eliminar');

