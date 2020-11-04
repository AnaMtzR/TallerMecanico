<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos_consorcio extends Model
{
    protected $table = 'tipos_consorcio';
    protected $fillable =
    [
        'nombre',
        'status',
    ];
}
