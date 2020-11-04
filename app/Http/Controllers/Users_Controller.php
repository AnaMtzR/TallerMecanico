<?php

namespace App\Http\Controllers;

use App\Entidades;
use App\Municipios;
use App\Tipos_usuario;
use App\Users;
use Illuminate\Http\Request;

class Users_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::where('status', 1)
            ->orderBy('ape_paterno')->get();;
        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_usuario = Tipos_usuario::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $entidades = Entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $municipios = Municipios::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('users.create')
            ->with('tipo_usuario', $tipo_usuario)
            ->with('entidades', $entidades)
            ->with('municipios', $municipios);
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
        Users::create($datos);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = users::find($id);
        return view('users.read')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = users::find($id);

        $tipo_usuario = Tipos_usuario::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $entidades = entidades::select('id', 'nombre')
            ->orderBy('nombre')->get();
        $municipios = municipios::select('id', 'nombre')
            ->orderBy('nombre')->get();
        return view('users.edit')
            ->with('users', $users)
            ->with('tipo_usuario', $tipo_usuario)
            ->with('entidades', $entidades)
            ->with('municipios', $municipios);
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
        $users = Users::find($id);
        $users->update($datos);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = users::find($id);
        $users->status = 0;
        $users->save();
        return redirect('/users');
    }
}
