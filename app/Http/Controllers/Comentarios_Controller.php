<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;
use App\User;
use App\Users;

class Comentarios_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentarios::where('status', 1)
            ->orderBy('fecha')->get();

        return view('comentarios.index')
            ->with('comentarios', $comentarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Users::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('comentarios.create')
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
        Comentarios::create($datos);

        return redirect('/comentarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comentarios = Comentarios::find($id);
        return view('comentarios.read')
            ->with('comentarios', $comentarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = Users::select('id', 'nombre')
            ->orderBy('nombre')->get();

        return view('comentarios.edit')
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
        $comentarios = Comentarios::find($id);
        $comentarios->update($datos);
        return redirect('/comentarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentarios = Comentarios::find($id);
        $comentarios->status = 0;
        $comentarios->save();

        return redirect('/comentarios');
    }
}
