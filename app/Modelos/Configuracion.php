<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
  protected $table = 'Configuracion';
  protected $fillable = ['descripcion', 'titulo','mailContacto','cantElem','habilitada'];
  protected $guarded = ['id'];

  public function __construct($entregaDirecta, $detalle_alimento, $cantidad) {
        $this->entregaDirecta = $entregaDirecta;
        $this->detalle_alimento = $detalle_alimento;
        $this->cantidad = $cantidad;
        return $this;
    }
    public function getEntregaDirecta(){
        return $this->entregaDirecta;
    }
    public function getDetalle_alimento(){
        return $this->detalle_alimento;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
}
