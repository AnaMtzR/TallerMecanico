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

Route::get('w', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('inicio');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('servicios', function () {
    return view('servicios');
});
Route::get('cruds', function () {
    return view('cruds');
});


Route::get('contacto', function () {
    if (true) {
        # code...
    } else {
        # code...
    }

    return view('contacto');
});


Route::get('reservas', function () {
    return view('reservas');
});


Route::get('sesion', function () {
    return view('sesion');
});


/*
|--------------------------------------------------------------------------
| Resources Controllers para tablas de CRUD's
|--------------------------------------------------------------------------
*/
Route::resource('comentarios', 'Comentarios_Controller');
Route::resource('cotizaciones', 'Cotizaciones_Controller');
Route::resource('entidades', 'Entidades_Controller');
Route::resource('fotos_servicio', 'Fotos_servicio_Controller');
Route::resource('municipios', 'Municipios_Controller');
Route::resource('reservas_servicio', 'Reservas_servicio_Controller');
Route::resource('tarjetas_cliente', 'Tarjetas_cliente_Controller');
Route::resource('tipos_servicios', 'Tipos_servicios_Controller');
Route::resource('tipos_usuario', 'Tipos_usuario_Controller');
Route::resource('tipos_banco', 'Tipos_banco_Controller');
Route::resource('tipos_consorcio', 'Tipos_consorcio_Controller');
Route::resource('users', 'Users_Controller');
