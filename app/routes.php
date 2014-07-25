<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('personas', 'PersonasController');


Route::get('login', array('uses' => 'UsuariosController@viewLogin'));//ver el login
Route::post('usuarios/login', array('uses' => 'UsuariosController@register'));//guardar usuario
Route::get('usuarios/registrar', array('uses' => 'UsuariosController@viewRegister'));//ver registro
Route::post('usuarios/validar', array('uses'=> 'UsuariosController@validateLogin'));
Route::get('usuarios/logout', array('uses'=> 'UsuariosController@getLogout'));

