<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservas_servicio extends Model
{
    protected $table = 'reservas_servicio';
    protected $fillable =
    [
        'id_tipo_serv',
        'id_cliente',
        'id_tarjeta',
        'fecha_inicio',
        'hora',
        'iva', 
        'total',
        'status',
    ];

    public function tipos_servicios()
    {
        return $this->belongsTo('App\Tipos_servicios', 'id_tipo_serv', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\Users', 'id_cliente', 'id');
    }

    public function tarjetas_cliente()
    {
        return $this->belongsTo('App\Tarjetas_cliente', 'id_tarjeta', 'id');
    }
}
