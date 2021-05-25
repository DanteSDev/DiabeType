@extends('layouts.master')

@section('content')
<style>
    #contenido {
        padding: 30px;
        text-align: center;
    }

    #posicion {
        top: 20%
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
                <h1 class="display-5">Login</h1>
                <hr class="my-4">
            <!-- llamar codigo de php dentro de html-->
                <form action="{{ url('/vistaPrincipal') }}" method="post">
                @csrf
                    <div class="form-group">      

                        <label class="form-control-label" for="usuario"> Usuario:</label>
                        <input type="text" id="usuario" name="usuario" class="form-control {{ $errors->first('usuario') ? 'is-invalid' : '' }} "/>

                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('usuario')  }}</div>
                        @endif
                        <label class="form-control-label" for="password"> Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control {{ $errors->first('password') ? 'is-invalid' : '' }} " />
                        <!-- Si la variable $errors contiene cuaqluier dato, evalua si hay un error en los inputs-->
                        @if ($errors->any())
                        <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
                    <input type="submit" value="Ingresar" class="btn btn-secondary"/>
                    <!-- componente para crear un link qe reedirecciona o manda a otra vista (a href)-->
                    <a href="{{ url('/register') }}" class="btn btn-secondary">Registrate</a>
                </form>
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
</div>
