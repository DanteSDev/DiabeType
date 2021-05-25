<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color:#57576B !important;" >
    <div class="navbar-brand">Diabetype1</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('vistaPrincipal') }}">Inicio
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('captura') }}">Captura</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('consulta') }}">Consulta</a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="#">Acerca de Diabetes</a>
            </li>-->
        </ul>
        <div class="form-inline my-2 my-lg-0">
            <div class="btn btn-primary nav-item dropdown" style="padding: 0.1rem 0.4rem !important;">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white !important;">Opciones</a>
                <div class="dropdown-menu">
                    <!--<a class="dropdown-item" href="#">Perfil</a>-->
                    <a class="dropdown-item" href="{{ url('cerrarSesion') }}">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
