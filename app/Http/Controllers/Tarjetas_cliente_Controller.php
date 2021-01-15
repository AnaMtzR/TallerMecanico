<?php

namespace App\Http\Controllers;

use App\Tarjetas_cliente;
use App\Tipos_banco;
use App\Tipos_consorcio;
use App\Users;
use Illuminate\Http\Request;

class Tarjetas_cliente_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarjetas_cliente = tarjetas_cliente::where('status', 1)
            ->orderBy('id_banco')->get();

        return view('tarjetas_cliente.index')
            ->with('tarjetas_cliente', $tarjetas_cliente);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        $tipos_banco = tipos_banco::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $tipos_consorcio = tipos_consorcio::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $users = users::select('id', 'username')
            ->orderBy('correo')->get();

        return view('tarjetas_cliente.create')
            ->with('users', $users)
            ->with('tipos_banco', $tipos_banco)
            ->with('tipos_consorcio', $tipos_consorcio);
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
        tarjetas_cliente::create($datos);

        return redirect('/tarjetas_cliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarjetas_cliente = tarjetas_cliente::find($id);
        $users = users::select('id', 'username')
            ->orderBy('correo')->get();
        return view('tarjetas_cliente.read')
            ->with('tarjetas_cliente', $tarjetas_cliente)
            ->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarjetas_cliente = tarjetas_cliente::find($id);

        $tipos_banco = tipos_banco::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $tipos_consorcio = tipos_consorcio::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $users = users::select('id', 'correo')
            ->orderBy('correo')->get();

        return view('tarjetas_cliente.edit')
            ->with('tarjetas_cliente', $tarjetas_cliente)
            ->with('users', $users)
            ->with('tipos_banco', $tipos_banco)
            ->with('tipos_consorcio', $tipos_consorcio);
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
        $tarjetas_cliente = tarjetas_cliente::find($id);
        $tarjetas_cliente->update($datos);

        return redirect('/tarjetas_cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarjetas_cliente = tarjetas_cliente::find($id);
        $tarjetas_cliente->status = 0;
        $tarjetas_cliente->save();

        return redirect('/tarjetas_cliente');
    }
}
