<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable = ['nombre', 'apellido', 'mail','sexo','fechaNacimiento','direccion','latitud','longitud','fechaIngreso','fechaEgreso','fechaAlta'];
}
