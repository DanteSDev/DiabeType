@extends('layouts.master')
@include('layouts.navbar')

@section('content')
<style>
    #contenido {
        padding: 30px;
        text-align: center;
    }

    #posicion {
        top: 15%
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
                <h1 class="display-5">Introduce tus glucosas</h1>
                <hr class="my-4">
                <form action="{{ url('/captura') }}" method="post">
                    @csrf
                    <div class="form-group">

                        <label for="numGlucosa" class="form-label mt-4">Glucosas</label>
                        <select class="form-select" id="numGlucosa" name="numGlucosa">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <label class="col-form-label" for="valorGlucosa"> Valor de tu glucosa:</label>
                        <input type="text" id="glucosa1" name="valorGlucosa" class="form-control" />

                    </div>

                    <div class="form-group">
                        <input type="submit" value="Guardar" class="btn btn-secondary" />
                    </div>
                </form>
                @include('sweetalert::alert')
            </div>
        </div>
    </div>
</div>