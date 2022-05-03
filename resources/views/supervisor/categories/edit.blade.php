@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Categoria')
@section('subtitulo','Editar - Categoria')
@section('contenido')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('supervisor.categories.update', ['category' => $category->id]) }}">
                
                @csrf
                @method('PUT')
                <div class="form-row">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') ?? $category->name }}" required>

                </div>
                <div class="form-row">
                    <label>Status</label>
                    <select class="form-select" name="status" required>
                        <option value="" selected>Seleccionar...</option>
                        <option {{ old('status') == 'available' ? 'selected' : ($category->status == 'available' ? 'selected' : '') }} value="available" >Available</option>
                        <option {{ old('status') == 'unavailable' ? 'selected' : ($category->status == 'unavailable' ? 'selected' : '') }} value="unavailable" >Unavailable</option>
                    </select>


                </div>
        
                <div class="form-row mt-3">
                    <button type="submit" class="btn btn-primary btn-lg">Actualizar categoria</button>
                </div>
        
            </form>
        </div>
    </div>
@endsection