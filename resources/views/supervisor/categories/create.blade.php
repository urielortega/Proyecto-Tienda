@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Categoria')


@section('subtitulo','Crear - Categoria')
@section('contenido')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('supervisor.categories.store') }}">
                @csrf
                <div class="form-row">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}" required>

                </div>
                <div class="form-row">
                    <label>Status</label>
                    <select class="form-select" name="status" required>
                        <option value="" selected>Seleccionar...</option>
                        <option {{ old('status') == 'available' ? 'selected' : ''}} value="available" >Habilitar</option>
                        <option {{ old('status') == 'unavailable' ? 'selected' : ''}} value="unavailable" >Deshabilitar</option>
                    </select>

                </div>
        
                <div class="form-row mt-3">
                    <button type="submit" class="btn btn-primary btn-lg">Crear categoria</button>
                </div>
        
            </form>
        </div>
    </div>
@endsection