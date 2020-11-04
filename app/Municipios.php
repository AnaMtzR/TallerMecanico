<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'municipios';
    protected $fillable =
    [
        'nombre',
        'id_entidad',
        'status'
    ];

    public function entidades()
    {
        return $this->belongsTo('App\Entidades', 'id_entidad', 'id');
    }
}
