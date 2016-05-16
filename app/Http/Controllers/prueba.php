<?php

namespace App\Http\Controllers;
use App\Modelos\Configuracion;

use Illuminate\Http\Request;

use App\Http\Requests;

class prueba extends Controller
{
  public function configuracion()
{
  return Configuracion::find(1)->titulo;;
}
}
