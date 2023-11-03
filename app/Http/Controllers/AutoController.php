<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autos = Auto::all();
        return view('autos.index', ['autos' => $autos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required:autos|max:10',
            'placa' => 'required|max:10',
            'motor' => 'required|max:50',
            'año_fabricasion' => 'required|date',
            'email' => 'nullable|email',
        ]);
        
        $auto = new Auto();
        $auto->modelo = $request->input('modelo');
        $auto->placa = $request->input('placa');
        $auto->motor = $request->input('motor');
        $auto->año_fabricasion = $request->input('año_fabricasion');
        $auto->email = $request->input('email');
        $auto->save();

        return view("autos.message", ['msg' => "Registro guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Auto $auto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $auto =Auto::find($id);
        return view('autos.edit', ['auto' => $auto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'modelo' => 'required:autos|max:10',
            'placa' => 'required|max:10',
            'motor' => 'required|max:50',
            'año_fabricasion' => 'required|date',
            'email' => 'nullable|email',
        ]);
        
        $auto = Auto::find($id);
        $auto->modelo = $request->input('modelo');
        $auto->placa = $request->input('placa');
        $auto->motor = $request->input('motor');
        $auto->año_fabricasion = $request->input('año_fabricasion');
        $auto->email = $request->input('email');
        $auto->save();

        return view("autos.message", ['msg' => "Registro modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $auto = Auto::find($id);
        $auto->delete();

        return redirect("autos");
    }
}
