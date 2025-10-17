@extends('layouts.app')

@section('title', 'Ver Producto')

@section('content')
    <h2>{{ $producto->nombre }}</h2>

    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
    <p><strong>Stock:</strong> {{ $producto->stock }}</p>
    <p><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</p>
    <p><strong>Código de Barras:</strong> {{ $producto->codigo_barras }}</p>
    <p><strong>Activo:</strong> {{ $producto->activo ? 'Sí' : 'No' }}</p>

    <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
@endsection