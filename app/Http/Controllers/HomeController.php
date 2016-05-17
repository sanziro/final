<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Modelos\Configuracion;

class HomeController extends Controller
{

    public function index()
    {
      $conf=Configuracion::find(1);
      if($conf->habilitada){

       return view('LoginController.login', ['titulo' => $conf->titulo,
                                      'descripcion'=>$conf->descripcion,
                                      'contacto'=>$conf->mailContacto]);
      }
      else{
          return view('indexNoHabil', ['titulo' => $conf->titulo,
                                      'msj'=>$conf->textoDeshab,
                                      'contacto'=>$conf->mailContacto]);
      }
        return view('HomeController.index');
    }
}
