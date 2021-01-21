<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fotos_servicio extends Model
{
    protected $table = 'fotos_servicio';
    protected $fillable = [
        'id_servicio',
        'ruta',
        'status'
    ];

    public function tipos_servicios()
    {
        return $this->belongsTo('App\Tipos_servicios', 'id_servicio', 'id');
    }
}
