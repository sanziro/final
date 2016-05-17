<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Modelos\Usuario;
//use App\Modelos\Configuracion;
class UsuarioController extends Controller
{
    public function add() {

          $user = new User();
          $user->username = Input::get('username');
          $user->rol = Input::get('rol');
          $user->password = Hash::make(Input::get('password'));
          $user->save();
          return Redirect::to('/');
      }
      public function index() {

//          $conf=Configuracion::find(1);
        $users = Usuario::all();
      //  $roles = Role::all();
          return view('UsuarioController.usuarios', array('usuario' => $users));
      }

}
