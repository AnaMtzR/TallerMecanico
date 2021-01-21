<?php

namespace App\Http\Controllers;

use App\tipos_servicios;
use Illuminate\Http\Request;

class tipos_servicios_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tp_servicio = tipos_servicios::where('status', 1)
            ->orderBy('nombre')->get();

        return view('tipos_servicios.index')
            ->with('tipos_servicios', $tp_servicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos_servicios.create');
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
        tipos_servicios::create($datos);

        return redirect('/tipos_servicios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tp_servicio = tipos_servicios::find($id);

        return view('tipos_servicios.read')
            ->with('tipos_servicios', $tp_servicio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tp_servicio = tipos_servicios::find($id);

        return view('tipos_servicios.edit')
            ->with('tipos_servicios', $tp_servicio);
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
        $tp_servicio = tipos_servicios::find($id);
        $tp_servicio->update($datos);

        return redirect('/tipos_servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tp_servicio = tipos_servicios::find($id);
        $tp_servicio->status = 0;
        $tp_servicio->save();

        return redirect('/tipos_servicios');
    }
}
