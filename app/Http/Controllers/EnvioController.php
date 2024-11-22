<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\envio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnvioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los envíos de la base de datos
        $envios = Envio::simplePaginate(5);
        return view('envios.index',compact('envios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('envios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $envio = new Envio();
        $envio ->nombre = $request->nombre;
        $envio ->direccion = $request->direccion;
        $envio ->telefono = $request->telefono;
        $envio ->correo = $request->correo;
        $envio -> save();
        return redirect()->route('envios.create')->with('success', 'Compra exitosa');

    }

    /**
     * Display the specified resource.
     */
    public function show(envio $envio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(envio $envio)
    {
        return view('envios.edit',['envio'=>$envio]);
        ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, envio $envio)
    {
        $envio->nombre = $request -> nombre;
        $envio->direccion = $request->direccion;
        $envio->telefono = $request->telefono;
        $envio->correo = $request->correo;
        $envio-> save();
        return redirect()->route('envios.index')->with('success', 'Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
// EnvioController.php

    public function destroy(Envio $envio)
    {
        $envio->delete();
        return redirect()->route('envios.index')->with('success', 'Envío eliminado correctamente');
    }
    

    public function pdf(Envio $envio)
    {
        $pdf = Pdf::loadView('envios.pdf', compact('envio'));
        return $pdf->download('envio_' . $envio->id . '.pdf');
    }
    
    


}
