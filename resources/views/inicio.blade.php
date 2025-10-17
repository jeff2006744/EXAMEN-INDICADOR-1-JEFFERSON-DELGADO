@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<div class="container">
    <h1 class="mb-4">Bienvenido al Inventario de la Tienda</h1>

    <h2>Categorías disponibles</h2>
    <div class="row">
        @foreach ($categorias as $categoria)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $categoria->nombre }}</h5>
                        <p class="card-text">{{ $categoria->descripcion }}</p>
                        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-primary">Ver productos</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
