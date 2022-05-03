@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Producto')


@section('subtitulo','Editar - Producto')

@section('contenido')
    
    <h1>Editar producto</h1>

    <form method="POST" action="{{ route('supervisor.products.update', ['product' => $product->id]) }}">

        @csrf
        @method('PUT')

        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="name" value="{{ old('name') ?? $product->name }}" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" value="{{ old('description') ?? $product->description }}" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{ old('price') ?? $product->price }}" required>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{ old('stock') ?? $product->stock }}" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="form-select" name="status" required>
                <option {{ old('status') == 'available' ? 'selected' : ($product->status == 'available' ? 'selected' : '') }} value="available" >Available</option>
                <option {{ old('status') == 'unavailable' ? 'selected' : ($product->status == 'unavailable' ? 'selected' : '') }} value="unavailable" >Unavailable</option>
            </select>
        </div>

        <div class="form-row mt-3">
            {{-- mt-# significa margin top --}}
            <button type="submit" class="btn btn-primary btn-lg">Edit product</button>
        </div>

    </form>

@endsection