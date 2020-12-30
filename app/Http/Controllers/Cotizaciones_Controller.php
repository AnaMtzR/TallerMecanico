<?php

namespace App\Http\Controllers;

use App\Cotizaciones;
use Illuminate\Http\Request;
use App\Tipos_servicios;

class Cotizaciones_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cotizaciones = Cotizaciones::where('status', 1)
            ->orderBy('nombre')->get();

        return view('cotizaciones.index')
            ->with('cotizaciones', $cotizaciones);
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

        return view('cotizaciones.create')
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
        Cotizaciones::create($datos);

        return redirect('/cotizaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cotizaciones = Cotizaciones::find($id);
        return view('cotizaciones.read')
            ->with('cotizaciones', $cotizaciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicios = Tipos_servicios::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('cotizaciones.create')
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
        $cotizaciones = Cotizaciones::find($id);
        $cotizaciones->update($datos);
        return redirect('/cotiz$cotizaciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cotizaciones = Cotizaciones::find($id);
        $cotizaciones->status = 0;
        $cotizaciones->save();

        return redirect('/cotizaciones');
    }
}
