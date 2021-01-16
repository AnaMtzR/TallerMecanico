<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarjetas_cliente extends Model
{
    protected $table = 'tarjetas_cliente';
    protected $fillable =
    [   'id_usuario',
        'id_banco',
        'id_consorcio',
        'no_tarjeta',
        'cvr',
        'mes',
        'anio',
        'status', 
    ];

    public function users()
    {
        return $this->belongsTo('App\Users', 'id_usuario', 'id');
    }

    public function tipos_banco()
    {
        return $this->belongsTo('App\Tipos_banco', 'id_banco', 'id');
    }

    public function tipos_consorcio()
    {
        return $this->belongsTo('App\Tipos_consorcio', 'id_consorcio', 'id');
    }
}
