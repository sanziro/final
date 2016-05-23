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
// route to process the form
Route::post('login','LoginController@dologin');//el middleware no va en esta va en lo q redirecciona esta ruta

//Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {           //grupo para las rutas q requieren autentificacion
    Route::get('/alumnos',['uses'=>'AlumnoController@index']);//el chequeo de roles se hace en cada controlador ver alumnosController
    Route::get('/alumno/{id}',['uses'=>'AlumnoController@show']);
    Route::get('/alumno/{id}/edit',['uses'=>'AlumnoController@edit']);
    Route::get('/alumno/{id}/delete',['uses'=>'AlumnoController@destroy']);
    Route::get('/alumno/new',['uses'=>'AlumnoController@create']);
    Route::post('/alumno/new',['uses'=>'AlumnoController@store']);
    Route::resource('configuracion','ConfiguracionController');
});


Route::get('/deco', 'UsuarioController@decodificar');

Route::get('backend/usuarios', 'UsuarioController@index');
Route::post('backend/usuarios/add', 'UsuarioController@add');




?>


