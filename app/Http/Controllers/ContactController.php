<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Asegúrate de que el modelo Contact esté creado

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Crear un nuevo registro en la base de datos
        Contact::create($validatedData);

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Mensaje enviado correctamente!');
    }
}
