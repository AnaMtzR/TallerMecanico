<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades;
use App\Municipios;

class AjaxController extends Controller
{
    public function combo_municipios($id_entidad)
    {
        $municipios = Municipios::select('id', 'nombre')
            ->where('id_entidad', $id_entidad)
            ->where('status', 1)
            ->orderby('nombre')
            ->get();

        return $municipios;
    }
}
