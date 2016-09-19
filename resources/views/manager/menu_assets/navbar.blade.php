<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('app.index') }}">
                Hackr<span class="hub">hub</span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/">Default</a></li>
                <li class="iniciar-sesion" data-toggle="modal" data-target="#modalIniciarSesion">
                    <a href="#">Iniciar sesión</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#modalSuscribete">Suscríbete</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Daniel Salcedo <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a>Perfil</a></li>
                        <li><a href="#">Suscripción</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a>Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>