<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_servicios extends Model
{
    protected $table = 'tipos_servicios';
    protected $fillable =
    [
        'nombre',
        'descripcion',
        'precio',
        'status',
    ];
}
