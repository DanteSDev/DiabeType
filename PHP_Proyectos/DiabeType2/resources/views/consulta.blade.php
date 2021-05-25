@extends('layouts.master')
@include('layouts.navbar')

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
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 offset-4 float-md-center" id="posicion">
    <div class="jumbotron vertical-center" id="contenido">
        <div class="jumbotron-content">
            <div class="container">
                <h1 class="display-5">Consulta tus promedios</h1>
                <hr class="my-4">
                <body>
                    <form action="{{ url('/consulta') }}" method="post">
                    @csrf
                        <label for="fechaInicial">Fecha inicial:</label>
                        <input type="date" id="fechaInicial" name="fechaInicial">
                        <p></p>
                        <label for="fechaFinal">Fecha final:</label>
                        <input type="date" id="fechaFinal" name="fechaFinal">
                        <p></p>
                        <input type="submit" value="Submit">
                    </form>
                    @include('sweetalert::alert')
                </body>
            </div>
        </div>
    </div>
</div>