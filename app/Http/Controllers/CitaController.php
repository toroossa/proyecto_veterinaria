<?php

namespace App\Http\Controllers;

use App\Models\cita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('citas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cita = new Cita();
        $cita ->paciente = $request->nombre;
        $cita ->responsable = $request->responsable;
        $cita ->telefono = $request->telefono;
        $cita ->telefonodos = $request->telefonodos;
        $cita ->detalles = $request->detalles;
        $cita -> save();
        return redirect()->route('citas.create')->with('success', 'Cita agendada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cita $cita)
    {
        //
    }
}
