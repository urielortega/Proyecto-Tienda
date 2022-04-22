@extends('auten.baseauten')

@section('titulo','Login')

@section('contenido')
<div class='box box_login shadow-lg bg-white rounded' align='center'>
    <div class="header">
        <a href="{{url('/')}}">
            <img src="{{url('/static/images/logo.png')}}">
        </a>
    </div>

    <div class="contenedor">
        {!! Form::open(['url' => '/login']) !!}
        <label for="correo">Correo electrónico</label>
        <div class='input-group'>
            <div class='input-group-prepend'>
                <div class='input-group-text'><ion-icon name="mail" class="ion"></ion-icon></div>
            </div>    
            {!! Form::email('correo', null, ['class' => 'form-control']) !!}
        </div>
    
        <label for="contraseña" class="m16">Contraseña</label>
        <div class='input-group' >
            <div class='input-group-prepend' >
                <div class='input-group-text'><ion-icon name="lock-closed" class="ion"></ion-icon></div>
            </div>    
            {!! Form::password('contraseña', ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('Ingresar', ['class' => 'btn btn-success m16'])!!}
        {!! Form::close() !!}

        @if(Session::has('message'))
            <div class="contenedor">
                <div class="alert alert-{{ Session::get('typealert')}}" style="display: none;">
                    {{ Session::get('message')}}
                    @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <script> $('.alert').slideDown();
                    setTimeout(function(){$('alert').slideUp();}, 10000);
                    </script>
                </div>
            </div>
        @endif 
    </div>
    
</div>
@stop