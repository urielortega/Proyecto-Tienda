@extends('supervisor.basedashboard')
@section('titulo','Dashboard - Categoria')
@section('subtitulo','Categoria')
@section('contenido')

    @if(session('info'))
        <div class="aler  alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a href="{{route('supervisor.categories.create')}}" class="btn btn-primary btn-sm">Agregar categoria</a>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Status</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->status }}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm " href="{{route('supervisor.categories.edit',$category)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('supervisor.categories.destroy',$category)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection