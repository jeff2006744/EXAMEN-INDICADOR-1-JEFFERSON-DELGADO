<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class InicioController extends Controller
{
    public function index()
    {
        // Obtiene todas las categorías para mostrarlas en la página de inicio
        $categorias = Categoria::all();
        return view('inicio', compact('categorias'));
    }
}
