<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        return view('registro'); // 'registro' es el nombre de la vista de registro
    }

    public function store(Request $request)
    {
        // Aquí puedes agregar la lógica para procesar el formulario de registro
        // Por ejemplo, puedes guardar los datos del nuevo usuario en la base de datos.
    }
}

