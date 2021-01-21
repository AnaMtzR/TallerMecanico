<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entidades;

class Entidades_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $entidades = entidades::where('status', 1)
            ->orderBy('nombre')->get();

        return view('entidades.index')->with('entidad', $entidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entidades.create');
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
        entidades::create($datos);
        return redirect('/entidades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entidades = Entidades::find($id);
        return view('entidades.read')->with('entidad', $entidades);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entidades = entidades::find($id);

        return view('entidades.edit')
            ->with('entidad', $entidades);
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
        $entidades = entidades::find($id);
        $entidades->update($datos);
        return redirect('/entidades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entidades = Entidades::find($id);
        $entidades->status = 0;
        $entidades->save();

        return redirect('/entidades');
    }
}
