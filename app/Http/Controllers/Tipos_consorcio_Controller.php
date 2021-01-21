<?php

namespace App\Http\Controllers;

use App\Tipos_consorcio;
use Illuminate\Http\Request;

class Tipos_consorcio_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tp_consorcio = tipos_consorcio::where('status', 1)
            ->orderBy('nombre')->get();

        return view('tipos_consorcio.index')
            ->with('tipos_consorcio', $tp_consorcio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipos_consorcio.create');
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
        tipos_consorcio::create($datos);

        return redirect('/tipos_consorcio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tp_consorcio = tipos_consorcio::find($id);

        return view('tipos_consorcio.read')
            ->with('tipos_consorcio', $tp_consorcio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tp_consorcio = tipos_consorcio::find($id);

        return view('tipos_consorcio.edit')
            ->with('tipos_consorcio', $tp_consorcio);
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
        $tp_consorcio = tipos_consorcio::find($id);
        $tp_consorcio->update($datos);

        return redirect('/tipos_consorcio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tp_consorcio = tipos_consorcio::find($id);
        $tp_consorcio->status = 0;
        $tp_consorcio->save();

        return redirect('/tipos_consorcio');
    }
}
