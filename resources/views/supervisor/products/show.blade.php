@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Categoria')


@section('subtitulo','Crear - Categoria')

@section('contenido')
    
<h1>{{ $product->name }} ( {{ $product->id }} )</h1>
Descripción: <p>{{ $product->description }}</p>
Fecha de publicación: <p>{{ $product->published_at }}</p>
Precio: <p>{{ $product->price }}</p>
Stock: <p>{{ $product->stock }}</p>
{{-- Categoria: <p>{{ $product->stock }}</p> --}}
Status: <p>{{ $product->status }}</p>

@endsection