@extends('auten.baseauten')

@section('titulo','Registro')

@section('contenido')
<div class='box box_registro shadow-lg bg-white rounded' align = "center">
    <div class="header">
        <a href="{{url('/')}}">
            <img src="{{url('/static/images/logo.png')}}">
        </a>
    </div>
    {{-- seccion --}}
    <div class="contenedor" >
        <div class="caja">
                {!! Form::open(['url' => '/registro']) !!}
                <label for="correo" class="label_name">Nombre(s)</label>
                <div class='input-group'>
                    <div class='input-group-prepend'>
                        <div class='input-group-text'><ion-icon name="person-circle" class="ion"></ion-icon></div>
                    </div>    
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'required']) !!}
                </div>
        
                <label for="correo" class="label_name">Apellido paterno</label>
                <div class='input-group'>
                    <div class='input-group-prepend'>
                        <div class='input-group-text'><ion-icon name="people-circle" class="ion"></ion-icon></div>
                    </div>    
                    {!! Form::text('apellido_paterno', null, ['class' => 'form-control', 'required']) !!}
                </div>
        
                <label for="correo" class="label_name">Apellido materno</label>
                <div class='input-group'>
                    <div class='input-group-text'><ion-icon name="people-circle" class="ion"></ion-icon></div>
                    <div class='input-group-prepend'>
                    </div>    
                    {!! Form::text('apellido_materno', null, ['class' => 'form-control', 'required']) !!}
                </div>
                
        </div>
        {{-- seccion --}}
        <div class="caja">
            
            <label for="correo" class="label_name">Correo electrónico</label>
            <div class='input-group'>
                <div class='input-group-prepend'>
                    <div class='input-group-text'><ion-icon name="mail" class="ion"></ion-icon></div>
                </div>    
                {!! Form::email('correo', null, ['class' => 'form-control', 'required']) !!}
            </div>
        
            <label for="contraseña" class="m16 label_name">Contraseña</label>
            <div class='input-group' >
                <div class='input-group-prepend' >
                    <div class='input-group-text'><ion-icon name="lock-closed" class="ion"></ion-icon></div>
                </div>    
                {!! Form::password('contraseña', ['class' => 'form-control', 'required']) !!}
            </div>

            <label for="contraseña" class="m16 label_name">Confirmar contraseña</label>
            <div class='input-group' >
                <div class='input-group-prepend' >
                    <div class='input-group-text'><ion-icon name="lock-closed" class="ion"></ion-icon></div>
                </div>    
                {!! Form::password('conf_contraseña', ['class' => 'form-control', 'required']) !!}
            </div>
        </div>

        <label for="correo" class="label_name">Rol en el sistema</label>     
            <div align="center">
                {{ Form::radio('usuario', 'Cliente' , true, ['class' => 'radio_btn']) }} <span class="span_sp ">Cliente</span>
                {{ Form::radio('usuario', 'Encargado' , false, ['class' => 'radio_btn']) }} <span class="span_sp ">Encargado</span>
                {{ Form::radio('usuario', 'Contador' , false, ['class' => 'radio_btn']) }} <span class="span_sp ">Contador</span>
        </div>
        {!! Form::submit('Registrar', ['class' => 'btn btn-success m16'])!!}
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