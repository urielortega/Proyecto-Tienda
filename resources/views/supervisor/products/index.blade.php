@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Producto')

@section('contenido')
<h1>Lista de productos</h1>

<a class="btn btn-success mb-3" href="{{ route('supervisor.products.create') }}">Create</a>
{{-- mb-# sirve para agregar margenes --}}

@empty($products)
    <div class="alert alert-warning">
        The produc list is empty
    </div>
@else
    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Fecha de publicación</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    @if ($product->status =='available')
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->published_at }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->status }}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{ route('supervisor.products.show', ['product' => $product->id]) }}">Show</a>
                                {{-- <a class="btn btn-link" href="{{ route('products.show', ['product' => $product->name]) }}">Show</a> los productos se pueden buscar por el titulo tambien--}}
                                {{-- <a class="btn btn-link" href="{{ route('products.edit', ['product' => $product->id]) }}">Edit</a>
                                <form method="POST" class="d-inline" action="{{ route('products.destroy', ['product' => $product->id]) }}"> 
                                    {{-- d-inline sirve para que el boton de delete se mantenga en linea--}}
                                    {{-- @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link">Delete</button> --}}
                                {{-- </form>  --}}
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endempty
@endsection