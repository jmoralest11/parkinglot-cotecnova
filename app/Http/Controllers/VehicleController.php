<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Models\Person;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $persons = Person::all();
        return view('vehicles.create', compact('persons'));
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
            'placa' => 'required|string|max:10',
            'marca' => 'required|string',
            'color' => 'required|string',
            'person_id' => 'required|numeric'
        ]);

        $vehicle = new Vehicle();
        $vehicle->placa = $request->input('placa');
        $vehicle->marca = $request->input('marca');
        $vehicle->color = $request->input('color');
        $vehicle->person_id = $request->input('person_id');

        $vehicle->save();

        return redirect(route('vehicles.index'))->with('Mensaje', 'Vehículo Registrado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->placa = $request->input('placa');
        $vehicle->marca = $request->input('marca');
        $vehicle->color = $request->input('color');
        $vehicle->save();

        return redirect(route('vehicles.index'))->with('Mensaje', 'Vehículo Modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicle = Vehicle::destroy($id);
        return redirect(route('vehicles.index'))->with('Mensaje', 'Vehículo Eliminado con éxito!');
    }
}
