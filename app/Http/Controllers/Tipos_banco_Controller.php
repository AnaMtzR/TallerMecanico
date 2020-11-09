<?php

namespace App\Http\Controllers;

use App\Tipos_banco;
use Illuminate\Http\Request;

class Tipos_banco_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tp_banco = tipos_banco::where('status', 1)
            ->orderBy('nombre')->get();

        return view('tipos_banco.index')
            ->with('tipos_banco', $tp_banco);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos_banco.create');
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
        tipos_banco::create($datos);
        return redirect('/tipos_banco');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tp_banco = tipos_banco::find($id);
        return view('tipos_banco.read')
            ->with('tipos_banco', $tp_banco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tp_banco = tipos_banco::find($id);

        return view('tipos_banco.edit')
            ->with('tipos_banco', $tp_banco);
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
        $tp_banco = tipos_banco::find($id);
        $tp_banco->update($datos);

        return redirect('/tipos_banco');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tp_banco = tipos_banco::find($id);
        $tp_banco->status = 0;
        $tp_banco->save();

        return redirect('/tipos_banco');
    }
}
