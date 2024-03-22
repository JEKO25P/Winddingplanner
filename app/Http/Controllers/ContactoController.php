<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Proteger todas las rutas del controlador con autenticación
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = Contacto::all(); // O cualquier otra forma de obtener los contactos de la base de datos
        return view('contactos', ['contactos' => $contactos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactoRequest $request)
    {
        $request->validate([ // Validar los datos del formulario
            
        ]);


        Contacto::create($request->all());

        return redirect()->route('contactos.index') // Redirigir a la ruta index
            ->with('success', 'Contacto creado exitosamente.'); // Enviar mensaje de éxito
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        return view('show-contacto', compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactoRequest $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contacto = Contacto::find($id);
        $contacto->delete();

        return redirect ('contactos');
    }
}
