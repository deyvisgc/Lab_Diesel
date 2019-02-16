<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposervicio extends Model
{
    protected $table='tipo_servicio';
    protected $primaryKey='id_tiposervicio';
    public $timestamps=false;
    protected $fillable=[
        'estado_servicio',
        'nombre_servicio',
    ];
}
