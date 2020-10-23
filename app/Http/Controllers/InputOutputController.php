<?php

namespace App\Http\Controllers;

use App\Models\InputOutput;
use App\Models\Parking;
use App\Models\Person;
use App\Models\Vehicle;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class InputOutputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $InputOutputs = InputOutput::where('estado', '=', 1)->get();
        return view('inputs_outputs.index', compact('InputOutputs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all();
        return view('inputs_outputs.create', compact('vehicles'));
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
            'vehicle_id' => 'required|numeric',
            'person_id' => 'required|numeric',
            'estado' => 'required|numeric',
        ]);

        $InputOutput = new InputOutput();
        $InputOutput->vehicle_id = $request->input('vehicle_id');
        $InputOutput->person_id = $request->input('person_id');
        $InputOutput->estado = $request->input('estado');

        $InputOutput->save();

        $info_farking = Parking::findOrFail(1);
        $info_farking->cupos = ($info_farking->cupos - 1);
        $info_farking->save();

        return redirect(route('inputs_outputs.index'))->with('Mensaje', 'Registrado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InputOutput  $inputOutput
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InputOutput  $inputOutput
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $InputOutput = InputOutput::findOrFail($id);
        $vehicles = Vehicle::all();
        return view('inputs_outputs.edit', compact('InputOutput', 'vehicles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InputOutput  $inputOutput
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $InputOutput = InputOutput::findOrFail($id);
        $InputOutput->vehicle_id = $request->input('vehicle_id');
        $InputOutput->person_id = $request->input('person_id');
        $InputOutput->estado = $request->input('estado');
        if($request->input('estado') == 2){
            $info_farking = Parking::findOrFail(1);
            $info_farking->cupos = ($info_farking->cupos + 1);
            $info_farking->save();
        }
        $InputOutput->estado = $request->input('estado');
        $InputOutput->save();

        return redirect(route('inputs_outputs.index'))->with('Mensaje', 'Modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InputOutput  $inputOutput
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputOutput $inputOutput)
    {
        //
    }
}
