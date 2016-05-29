<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Couta extends Model
{
     protected $fillable = ['anio', 'mes', 'numero','monto','tipo','comisionCob','eliminada'];
     static function habilitadas(){
         return this::where('eliminada',false);
     } 
}
