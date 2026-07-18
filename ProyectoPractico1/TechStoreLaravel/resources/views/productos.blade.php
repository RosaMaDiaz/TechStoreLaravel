@extends('layouts.app')

@section('title', 'Productos')

@section('content')
<h2>Catálogo de Productos</h2>

<!-- FORMULARIO DE BÚSQUEDA REINTEGRADO -->
<div class="buscador-container" style="margin-bottom: 20px;">
    <form action="{{ route('productos.index') }}" method="GET" style="display: flex; gap: 10px;">
        <input
            type="text"
            name="buscar"
            placeholder="Buscar producto..."
            value="{{ request('buscar') }}"
            style="padding: 8px; width: 300px; border: 1px solid #ccc; border-radius: 4px;">
        <button type="submit" style="padding: 8px 15px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">
            Buscar
        </button>
    </form>
</div>

<!-- CONTENEDOR DE PRODUCTOS (Tu diseño en cuadrícula) -->
<div class="productos-contenedor" style="display: flex; gap: 20px; flex-wrap: wrap;">
    @if(count($listadoProductos) > 0)
    @foreach($listadoProductos as $producto)
    <div class="tarjeta-producto" style="border: 1px solid #ececec; padding: 15px; border-radius: 8px; width: 220px; text-align: center; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
        <!-- Conserva aquí las etiquetas de tus imágenes y estilos exactos -->
        <img src="{{ $producto['imagen'] }}" alt="{{ $producto['nombre'] }}" style="max-width: 100%; height: auto;">
        <h3 style="color: #007bff; font-size: 1.1em;">{{ $producto['nombre'] }}</h3>
        <p style="font-size: 0.9em; color: #555;">{{ $producto['descripcion'] }}</p>
        <p style="font-weight: bold; color: #28a745;">${{ number_format($producto['precio'], 2) }}</p>
        <button
            onclick="alert(`¡Gracias por elegir TechStore! Has añadido {{ $producto['nombre'] }} al carrito de compras.`)"
            style="background-color: #007bff; color: white; border: none; padding: 8px 15px; border-radius: 4px; cursor: pointer;">
            Comprar
        </button>
    </div>
    @endforeach
    @else
    <p>No se encontraron productos que coincidan con tu búsqueda en TechStore.</p>
    @endif
</div>
@endsection