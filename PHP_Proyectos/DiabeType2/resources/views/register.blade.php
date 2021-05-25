@extends('layouts.master')

@section('content')
<style>
    #contenido {
        padding: 30px;
        text-align: center;
    }

    #posicion {
        top: 10%
    }

    body {
        background-image: url('../img/DiabetesLogin2.jpeg');
        background-repeat:no-repeat;
        background-size:cover; 
    }
</style>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 offset-4 float-md-center" id="posicion">
    <div class="jumbotron vertical-center" id="contenido">
        <div class="jumbotron-content">
            <div class="container">
                <h1 class="display-5">Registrarse</h1>
                <hr class="my-4">
                <form action="{{ url('/register') }}" method="post">
                @csrf
                    <div class="form-group">
                        <label class="col-form-label" for="nombre"> Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control {{ $errors->first('nombre') ? 'is-invalid' : '' }} "/>
                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
                        @endif

                        <label class="col-form-label" for="apellido"> Apellidos:</label>
                        <input type="text" id="apellido" name="apellido" class="form-control {{ $errors->first('apellido') ? 'is-invalid' : '' }} "/>
                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('apellido') }}</div>
                        @endif

                        <label class="col-form-label" for="usuario"> Usuario:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control {{ $errors->first('usuario') ? 'is-invalid' : '' }} "/>
                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('usuario') }}</div>
                        @endif

                        <label class="form-control-label" for="password"> Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }} "/>
                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif 

                        <label class="col-form-label" for="email"> Email:</label>
                        <input type="email" id="email" name="email" class="form-control {{ $errors->first('email') ? 'is-invalid' : '' }} "/>
                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <a href="{{ url('/login') }}" class="btn btn-secondary">Cancelar</a>
                    <input type="submit" value="Registrate" class="btn btn-secondary"/>

                </form>
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
</div>