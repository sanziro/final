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

Route::get('/', function () {
    return view('layouts.index');
});
Route::get('test', function() {
   $user = new User();
   $user->email = 'cosme_fulanito@mail.com';
   $user->real_name = 'cosme';
   $user->password = Hash::make('1234');
   $user->level = 1;
   $user->active = true;
   $user->save();
   return 'Usuario insertado correctamente.';
});
Route::get('algo', 'prueba@configuracion');
