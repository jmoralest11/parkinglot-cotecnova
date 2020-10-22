<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persons = Person::all();
        return view('persons.index', compact('persons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('persons.create');
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
            'cedula' => 'required|numeric|unique:persons',
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'email' => 'required|email|string|unique:persons',
            'telefono' => 'required|string',
            'direccion' => 'required|string',
            'imagen' => 'required'
        ]);

        $person = new Person();
        $person->cedula = $request->input('cedula');
        $person->name = $request->input('nombre');
        $person->apellidos = $request->input('apellidos');
        $person->email = $request->input('email');
        $person->telefono = $request->input('telefono');
        $person->direccion = $request->input('direccion');

        if($request->hasFile('imagen')){
            $person->imagen = $request->file('imagen')->store('uploads', 'public');
        }

        $person->save();

        return redirect(route('persons.index'))->with('Mensaje', 'Usuario Registrado con éxito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);
        return view('persons.show', compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);
        return view('persons.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person = Person::findOrFail($id);
        $person->cedula = $request->input('cedula');
        $person->name = $request->input('nombre');
        $person->apellidos = $request->input('apellidos');
        $person->email = $request->input('email');
        $person->telefono = $request->input('telefono');
        $person->direccion = $request->input('direccion');
        $person->save();

        return redirect(route('persons.index'))->with('Mensaje', 'Usuario Modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::destroy($id);
        return redirect(route('persons.index'))->with('Mensaje', 'Usuario Eliminado con éxito!');
    }
}
