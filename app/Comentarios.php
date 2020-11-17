<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    protected $table = 'comentarios';
    protected $fillable = [
        'id_usuario',
        'descripcion',
        'fecha',
        'status'
    ];

    public function users()
    {
        return $this->belongsTo('App\Users', 'id_usuario', 'id');
    }
}
