<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    protected $table = 'cotizaciones';
    protected $fillable = [
        'fecha_inicio',
        'id_servicio',
        'descripcion',
        'correo',
        'status'
    ];

    public function tipos_servicios()
    {
        return $this->belongsTo('App\Tipos_servicios', 'id_servicio', 'id');
    }
}
