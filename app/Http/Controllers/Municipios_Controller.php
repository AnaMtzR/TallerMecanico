<?php

namespace App\Http\Controllers;

use App\Municipios;
use App\Entidades;
use Illuminate\Http\Request;

class Municipios_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $municipios = Municipios::where('status', 1)
            ->orderBy('id_entidad')
            ->orderBy('nombre')->get();

        return view('municipios.index')
        ->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('municipios.create')
        ->with('entidades', $entidades);
    }

    /**
     * Store a newly created resource in storage.
     *     
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Municipios::create($datos);
        return redirect('/municipios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = Municipios::find($id);
        return view('municipios.read')
        ->with('municipio', $municipio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = Municipios::find($id);
        $entidades = entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('municipios.edit')
            ->with('municipio', $municipio)
            ->with('entidades', $entidades);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $municipio = Municipios::find($id);
        $municipio->update($datos);
        return redirect('/municipios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $municipio = Municipios::find($id);
        $municipio->status = 0;
        $municipio->save();

        return redirect('/municipios');
    }
}
