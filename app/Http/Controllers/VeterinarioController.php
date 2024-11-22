<?php

namespace App\Http\Controllers;
use App\Models\veterinario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veterinarios = Veterinario::simplePaginate(10);
        return view('veterinarios.index',compact('veterinarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(veterinario $veterinario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(veterinario $veterinario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, veterinario $veterinario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(veterinario $veterinario)
    {
        //
    }
    
}

