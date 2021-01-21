<?php

use App\Cotizaciones;
use Illuminate\Support\Facades\Route;
use App\Entidades;
use App\Municipios;
use App\Tarjetas_cliente;
use App\Tipos_banco;
use App\Tipos_consorcio;
use App\Tipos_usuario;
use App\User;
use App\Users;

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


Route::get('correo/{id}', function ($id) {
    $cotizaciones = Cotizaciones::find($id);
    return view('correo')
        ->with('cotizaciones', $cotizaciones);
});

Route::get('sesion', function () {
    $tipo_usuario = Tipos_usuario::select('id', 'nombre')
        ->orderBy('nombre')->get();
    $entidades = Entidades::select('id', 'nombre')
        ->orderBy('nombre')->get();
    $municipios = Municipios::select('id', 'nombre')
        ->orderBy('nombre')->get();
    return view('sesion')
        ->with('tipo_usuario', $tipo_usuario)
        ->with('entidades', $entidades)
        ->with('municipios', $municipios);;
});

Route::get('registro', function () {
    $tipo_usuario = Tipos_usuario::select('id', 'nombre')
        ->orderBy('nombre')->get();
    $entidades = Entidades::select('id', 'nombre')
        ->orderBy('nombre')->get();
    $municipios = Municipios::select('id', 'nombre')
        ->orderBy('nombre')->get();
    return view('registro')
        ->with('tipo_usuario', $tipo_usuario)
        ->with('entidades', $entidades)
        ->with('municipios', $municipios);;
});

/*
|--------------------------------------------------------------------------
| Rutas para la pantalla de bienvenida.
|--------------------------------------------------------------------------
*/
Route::get('bienvenida/{id}', function ($id) {
    $usuario = Users::find($id);
    $tarjetas = Tarjetas_cliente::select()
        ->where('id_usuario', $id)
        ->where('status', 1)
        ->get();
    return view('bienvenida')
        ->with('usuario', $usuario)
        ->with('tarjetas', $tarjetas);
});

/*
|--------------------------------------------------------------------------
| Rutas para agregar una tarjeta por usuario.
|--------------------------------------------------------------------------
*/
Route::get('agregar_tarjeta/{id}', function ($id) {
    $usuario = Users::find($id);
    $tipos_banco = Tipos_banco::select('id', 'nombre')
        ->orderBy('nombre')->get();
    $tipos_consorcio = Tipos_consorcio::select('id', 'nombre')
        ->orderBy('nombre')->get();
    return view('agregar_tarjeta')
        ->with('usuario', $usuario)
        ->with('tipos_banco', $tipos_banco)
        ->with('tipos_consorcio', $tipos_consorcio);;
});

/*
|--------------------------------------------------------------------------
| Rutas para el correo electrónico.
|--------------------------------------------------------------------------
*/
Route::get('form_mail/{id}', 'CorreoController@create');
Route::post('enviar_correo', 'CorreoController@enviar');
//Fin correo electrónico.//

/*
|--------------------------------------------------------------------------
| Rutas para la pantalla de bienvenida.
|--------------------------------------------------------------------------
*/
Route::get('combo_municipios_x_entidad/{id_entidad}', 'AjaxController@combo_municipios');

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
