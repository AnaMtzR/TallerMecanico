<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $fillable =
    [
        'nombre',
        'ape_paterno',
        'ape_materno',
        'edad',
        'genero',
        'id_tarjeta',
        'id_tipo_usuario',
        'id_entidad',
        'id_municipio',
        'direccion',
        'colonia',
        'cp',
        'username',
        'correo',
        'psw',
        'status',
    ];

    public function tarjetas_cliente()
    {
        return $this->belongsTo('App\Tarjetas_cliente', 'id_tarjeta', 'id');
    }

    public function tipos_usuario()
    {
        return $this->belongsTo('App\Tipos_usuario', 'id_tipo_usuario', 'id');
    }

    public function entidades()
    {
        return $this->belongsTo('App\Entidades', 'id_entidad', 'id');
    }

    public function municipios()
    {
        return $this->belongsTo('App\Municipios', 'id_municipio', 'id');
    }
}
