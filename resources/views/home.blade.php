@extends('baseHome')

@section('titulo','Inicio')

@section('content')
<div class="barra_home">
    <div class="col-md-4">
        <div class="categorias">
            <a href="#">Categorias</a>
            <ul>
                @foreach($categories as $category)
                <li>
                    <a href="{{ url('/store/category/'.$category->id.'/')}}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection