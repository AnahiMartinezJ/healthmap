<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/usuarios', 'UsuariosController@usuarios');
Route::post('/usuarios/{id}', 'UsuariosController@regresa_usuario');
Route::post('/usuarios/{id}/cambiar_jerarquia', 'UsuariosController@cambiar_jerarquia');
Route::post('/usuarios/{id}/cambiar_autorizacion', 'UsuariosController@cambiar_autorizacion');
Route::get('/registrodeactividad', 'RegistroActividadController@registrodeactividad');