<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
//Route::get('login', 'LoginController@doLogin');
//Route::get('/', 'frontend_controller@index');
Route::post('login', ['middleware' => 'rol:consulta','uses' => 'LoginController@dologin']);//el middleware no va en esta va en lo q redirecciona esta ruta
// route to process the form
Route::get('/home', 'HomeController@index');


Route::get('/deco', 'UsuarioController@decodificar');

Route::get('backend/usuarios', 'UsuarioController@index');
Route::post('backend/usuarios/add', 'UsuarioController@add');
