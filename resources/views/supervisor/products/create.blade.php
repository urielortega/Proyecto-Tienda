@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Producto')


@section('subtitulo','Crear - Producto')

@section('contenido')
    
    <h1>Crear Producto</h1>

    <form method="POST" action="{{ route('supervisor.products.store') }}">

        @csrf

        <div class="form-row">
            <label>Title</label>
            <input class="form-control" type="text" name="name" value="{{old('name')}}" required>
        </div>

        <div class="form-row">
            <label>Description</label>
            <input class="form-control" type="text" name="description" value="{{old('description')}}" required>
        </div>

        <div class="form-row">
            <label>Price</label>
            <input class="form-control" type="number" min="1.00" step="0.01" name="price" value="{{old('price')}}" required>
        </div>

        <div class="form-row">
            <label for="">Categoria</label>
            <select name="category" class="form-control" required>
                <option value="" selected>Select...</option>
                @foreach($categories as $category)
                    {{-- <option name="category" value="{{ url('/store/category/'.$category->id.'/')}}">{{ $category->name }}</option> --}}
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="number" min="0" name="stock" value="{{old('stock')}}" required>
        </div>

        <div class="form-row">
            <label>Status</label>
            <select class="form-select" name="status" required>
                <option value="" selected>Select...</option>
                <option {{ old('status') == 'available' ? 'selected' : ''}} value="available" >Available</option>
                <option {{ old('status') == 'unavailable' ? 'selected' : ''}} value="unavailable" >Unavailable</option>
            </select>
        </div>

        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Create product</button>
        </div>

    </form>

@endsection