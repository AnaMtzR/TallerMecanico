<?php

namespace App\Http\Controllers;

use App\Fotos_servicio;
use Illuminate\Http\Request;
use App\Tipos_servicios;

class Fotos_servicio_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {

        $fotos_servicio = Fotos_servicio::where('status', 1)
            ->orderBy('id_servicio')->get();

        return view('fotos_servicio.index')
            ->with('fotos_servicio', $fotos_servicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Tipos_servicios::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('fotos_servicio.create')
            ->with('servicios', $servicios);
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
        Fotos_servicio::create($datos);
        return redirect('/fotos_servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fotos_servicio = Fotos_servicio::find($id);
        return view('fotos_servicio.read')->with('fotos_servicio', $fotos_servicio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fotos_servicio = Fotos_servicio::find($id);
        $servicios = Tipos_servicios::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('fotos_servicio.edit')
            ->with('fotos_servicio', $fotos_servicio)
            ->with('servicios', $servicios);
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
        $fotos_servicio = Fotos_servicio::find($id);
        $fotos_servicio->update($datos);
        return redirect('/fotos_servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fotos_servicio = Fotos_servicio::find($id);
        $fotos_servicio->status = 0;
        $fotos_servicio->save();

        return redirect('/fotos_servicio');
    }
}
