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


Route::get('/', array( 'as' => '/', 'uses' => 'HomeController@index'));
Route::post('login','LoginController@dologin');//el middleware no va en esta va en lo q redirecciona esta ruta

Route::get('logout', array( 'as' => 'logout', 'uses' => 'LoginController@logout'));

Route::group(['middleware' => 'auth'], function () {           //grupo para las rutas q requieren autentificacion
    Route::get('/alumno/{id}/edit/responsables',array( 'uses' => 'ResponsableController@index'));
    Route::resource('configuracion','ConfiguracionController');
    Route::resource('alumno','AlumnoController');
    Route::get('/estadistica/{iduser}', array( 'as' => '/estadistica', 'uses' => 'EstadisticaController@index'));
    Route::post('/estadistica/{iduser}', array( 'as' => '/estadistica', 'uses' => 'EstadisticaController@show'));
    Route::resource('cuota','CuotaController');
});


Route::get('/deco', 'UsuarioController@decodificar');

Route::get('backend/usuarios', 'UsuarioController@index');
Route::post('backend/usuarios/add', 'UsuarioController@add');




?>


