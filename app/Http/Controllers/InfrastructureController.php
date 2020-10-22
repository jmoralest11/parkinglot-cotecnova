<?php

namespace App\Http\Controllers;

use App\Models\Infrastructure;
use Illuminate\Http\Request;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infrastructures = Infrastructure::all();
        return view('infrastructures.index', compact('infrastructures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('infrastructures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'necesidad' => 'required|string',
            'descripcion' => 'required|string',
            'prioridad' => 'required|string',
            'estado' => 'required|string'
        ]);

        $infrastructure = new Infrastructure();
        $infrastructure->tipo_necesidad = $request->input('necesidad');
        $infrastructure->descripcion = $request->input('descripcion');
        $infrastructure->prioridad = $request->input('prioridad');
        $infrastructure->estado = $request->input('estado');

        $infrastructure->save();

        return redirect(route('infrastructure.index'))->with('Mensaje', 'Problemática Registrada con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infrastructure = Infrastructure::findOrFail($id);
        return view('infrastructures.show', compact('infrastructure'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infrastructure = Infrastructure::findOrFail($id);
        return view('infrastructures.edit', compact('infrastructure'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $infrastructure = Infrastructure::findOrFail($id);
        $infrastructure->tipo_necesidad = $request->input('necesidad');
        $infrastructure->descripcion = $request->input('descripcion');
        $infrastructure->prioridad = $request->input('prioridad');
        $infrastructure->estado = $request->input('estado');

        $infrastructure->save();

        return redirect(route('infrastructure.index'))->with('Mensaje', 'Problemática Modificada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infrastructure  $infrastructure
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infrastructure = Infrastructure::destroy($id);
        return redirect(route('infrastructure.index'))->with('Mensaje', 'Problemática Eliminada con éxito!');
    }
}
