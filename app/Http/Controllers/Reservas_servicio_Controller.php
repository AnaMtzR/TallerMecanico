<?php

namespace App\Http\Controllers;

use App\Reservas_servicio;
use App\Users;
use App\Tipos_servicios;
use App\Tarjetas_cliente;
use Illuminate\Http\Request;

class Reservas_servicio_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas_servicio = reservas_servicio::where('status', 1)
            ->orderBy('id_cliente')->get();;

        return view('reservas_servicio.index')
            ->with('reservas_servicio', $reservas_servicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_servicio = tipos_servicios::select('id', 'nombre', 'precio')
            ->orderBy('nombre')->get();
        $users = users::select('id', 'correo')
            ->orderBy('correo')->get();
        $tarjetas_clientes = tarjetas_cliente::select('id', 'no_tarjeta')
            ->orderBy('no_tarjeta')->get();

        return view('reservas_servicio.create')
            ->with('tarjetas_clientes', $tarjetas_clientes)
            ->with('tipos_servicio', $tipos_servicio)
            ->with('users', $users);
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
        reservas_servicio::create($datos);

        return redirect('/reservas_servicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservas_servicio = reservas_servicio::find($id);
        return view('reservas_servicio.read')
            ->with('reservas_servicio', $reservas_servicio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservas_servicio = reservas_servicio::find($id);

        $tipos_servicio = tipos_servicios::select('id', 'nombre', 'precio')
            ->orderBy('nombre')->get();
        $users = users::select('id', 'correo')
            ->orderBy('correo')->get();
        $tarjetas_clientes = tarjetas_cliente::select('id', 'no_tarjeta')
            ->orderBy('no_tarjeta')->get();

        return view('reservas_servicio.edit')
            ->with('reservas_servicio', $reservas_servicio)
            ->with('tarjetas_clientes', $tarjetas_clientes)
            ->with('tipos_servicio', $tipos_servicio)
            ->with('users', $users);
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
        $reservas_servicio = reservas_servicio::find($id);
        $reservas_servicio->update($datos);
        
        return redirect('/reservas_servicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservas_servicio = reservas_servicio::find($id);
        $reservas_servicio->status = 0;
        $reservas_servicio->save();

        return redirect('/reservas_servicio');
    }
}
