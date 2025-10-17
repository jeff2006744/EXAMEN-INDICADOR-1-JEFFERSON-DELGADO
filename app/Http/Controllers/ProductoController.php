<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:200',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'codigo_barras' => 'required|unique:productos,codigo_barras|max:50',
            'imagen' => 'nullable|image|max:2048',
            'activo' => 'nullable|boolean',
        ]);

        $datos = $request->all();
        $datos['activo'] = $request->has('activo');

        if ($request->hasFile('imagen')) {
            $ruta = $request->file('imagen')->store('imagenes', 'public');
            $datos['imagen'] = $ruta;
        }

        Producto::create($datos);

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|max:200',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'categoria_id' => 'required|exists:categorias,id',
            'codigo_barras' => 'required|max:50|unique:productos,codigo_barras,' . $producto->id,
            'imagen' => 'nullable|image|max:2048',
            'activo' => 'nullable|boolean',
        ]);

        $datos = $request->all();
        $datos['activo'] = $request->has('activo');

        if ($request->hasFile('imagen')) {
            // Elimina imagen anterior si existe
            if ($producto->imagen) {
                Storage::disk('public')->delete($producto->imagen);
            }
            $ruta = $request->file('imagen')->store('imagenes', 'public');
            $datos['imagen'] = $ruta;
        }

        $producto->update($datos);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        if ($producto->imagen) {
            Storage::disk('public')->delete($producto->imagen);
        }

        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
