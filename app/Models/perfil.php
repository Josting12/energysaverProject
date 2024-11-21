<?php

namespace App\Http\Controllers;

use App\Models\Profile; // Asegúrate de importar el modelo
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    // Método para mostrar la lista de perfiles
    public function index()
    {
        $profiles = Profile::all(); // Usando Eloquent para obtener todos los perfiles
        return view('perfiles.index', compact('profiles'));
    }

    // Método para mostrar el formulario de creación de un nuevo perfil
    public function create()
    {
        return view('perfiles.create');
    }

    // Método para mostrar un perfil específico
    public function show($id)
    {
        // Usando Eloquent para encontrar el perfil por ID
        $profile = Profile::findOrFail($id); // Aquí estamos usando Eloquent
        return view('perfiles.show', compact('profile'));
    }
}