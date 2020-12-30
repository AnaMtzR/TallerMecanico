<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_banco extends Model
{
    protected $table = 'tipos_banco';
    protected $fillable =
    [
        'nombre',
        'status',
    ];
}
