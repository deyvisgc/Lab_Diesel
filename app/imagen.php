<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
 protected $table="imagenes";
    protected $primaryKey='id_imagen';
  public $timestamps=false;

    protected $fillable=[
     'img_ruta',
     'id_ti´po_servicio',
     'img_estado',

 ];
}
