<?php

namespace App\Http\Controllers;

use App\Tipos_usuario;
use Illuminate\Http\Request;

class Tipos_usuario_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tp_usuario = tipos_usuario::where('status', 1)
            ->orderBy('nombre')->get();

        return view('tipos_usuario.index')
            ->with('tipos_usuario', $tp_usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos_usuario.create');
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
        tipos_usuario::create($datos);

        return redirect('/tipos_usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tp_usuario = tipos_usuario::find($id);

        return view('tipos_usuario.read')
            ->with('tipos_usuario', $tp_usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tp_usuario = tipos_usuario::find($id);

        return view('tipos_usuario.edit')
            ->with('tipos_usuario', $tp_usuario);
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
        $tp_usuario = tipos_usuario::find($id);
        $tp_usuario->update($datos);

        return redirect('/tipos_usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tp_usuario = tipos_usuario::find($id);
        $tp_usuario->status = 0;
        $tp_usuario->save();

        return redirect('/tipos_usuario');
    }
}
