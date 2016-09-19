<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('titulo')</title>

    <!-- Bootstrap core CSS -->
    <link href="//fonts.googleapis.com/css?family=Didact+Gothic|Jockey+One|Open+Sans:400,700|Oxygen|Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">

    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/nprogress/nprogress.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <link href="{{asset('css/core.css')}}" rel="stylesheet">

    @yield('css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        input[type=text], input[type=password] {
            border-radius: 5px;
            padding: 11px 10px;
            height: auto;
            outline: 0;
            font-size: 18px;
            color: #355368;
            border: 1px solid #a9a9a9;
        }
        .modal-title {
            color: #355368;
            font-size: 20px;
        }
        .modal-content{
            padding: 20px;
            font-family: 'Open Sans', sans-serif;
        }
        .modal-content label {
            font-weight: 400;
        }
        .modal-body {
            padding: 0px 15px;
        }
        .modal-footer {
            font-size: 14px;
        }
        input[type=button].btn-block, input[type=reset].btn-block, input[type=submit].btn-block {
            width: 100%;
            padding: 11px 10px;
            font-size: 17px;
        }
        .form-control-feedback {
            position: absolute;
            top: 0;
            left: 5px;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }
        .has-feedback {
            margin-bottom: 0px;
        }
        .has-feedback .form-control {
            padding-left: 42.5px;
            padding-right: 15px;
        }
        .has-feedback .form-control-feedback {
            top: 6px;
            color: #d6d6d6;
            font-size: 20px;
        }
        .input-spacer {
            margin-top: 20px;
        }
        @media (min-width: 768px) {
            .modal-dialog {
                width: 420px;
                margin: 30px auto;
            }
        }
    </style>
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('web.index') }}">
                Hackr<span class="hub">hub</span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Blog</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Carreras</a></li>
                <li class="iniciar-sesion" data-toggle="modal" data-target="#modalIniciarSesion">
                    <a href="#">Iniciar sesión</a>
                </li>
                <li class="active">
                    <a href="#" data-toggle="modal" data-target="#modalSuscribete">Suscríbete</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('body')


<div class="modal fade" id="modalSuscribete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background: #fafafa;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">
                    ¡Regístrate y comienza a aprender!
                </h4>
            </div>
            <div class="modal-body" style="font-size: 16px; font-family: 'Open Sans', sans-serif;">
                {!! Form::open(['route' => 'web.registro', 'style'=>'margin-top: 0px; margin-bottom: 15px;']) !!}

                    <div class="form-group has-feedback">
                        {!! Form::text('nombre', null, ['class' => 'form-control input-spacer', 'placeholder'=>'Nombre completo']) !!}
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::text('email', null, ['class' => 'form-control input-spacer', 'placeholder'=>'Correo electrónico']) !!}
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        {!! Form::password('password', ['class' => 'form-control input-spacer', 'placeholder'=>'Contraseña']) !!}
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="checkbox">
                        <label style="font-size: 14px;">
                            <input type="checkbox" name="mailing" value="1" checked> ¡Sé el primero en conocer los nuevos cursos y las mejores ofertas!
                        </label>
                    </div>
                    <input type="submit" class="btn btn-block btn-success" value="Regístrate">
                    {!! Form::close() !!}
                    <p class="text-center" style="font-size: 14px;">
                    Al registrarte, aceptas nuestras <a href="#">Condiciones de uso</a> y <a href="#">Política de privacidad</a>.
                </p>
            </div>
            <div class="modal-footer">
                <p class="text-center">
                    ¿Ya tienes una cuenta? <a href="#">Inicia sesión</a>
                </p>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modalIniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content"  style="background: #fafafa;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">
                    ¡Inicia sesión en tu cuenta!
                </h4>
            </div>
            <div class="modal-body" style="font-size: 16px; font-family: 'Open Sans', sans-serif;">

                {!! Form::open(['url' => 'foo/bar', 'style'=>'margin-bottom: 15px; margin-top: 15px;']) !!}
                    <div class="form-group has-feedback">
                        {!! Form::text('email', null, ['class' => 'form-control input-spacer', 'placeholder'=>'Correo electrónico']) !!}
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback" style="margin-bottom: 25px;">
                        {!! Form::password('password', ['class' => 'form-control input-spacer', 'placeholder'=>'Contraseña']) !!}
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <input type="submit" class="btn btn-block btn-success" value="Iniciar sesión">
                {!! Form::close() !!}

                <p class="text-center" style="font-size: 14px;">
                    <a href="#">¿Has olvidado la contraseña?</a>
                </p>
            </div>
            <div class="modal-footer">
                <p class="text-center">
                    <a href="#" class="btn btn-lg btn-facebook">
                        <i class="fa fa-facebook"></i> Iniciar sesión con Facebook
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="container">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum et laboriosam laborum placeat, praesentium quam quisquam quo recusandae reprehenderit! Adipisci at beatae itaque nam necessitatibus nesciunt perspiciatis sunt! Aut?
    </div>
</div>

<script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
<script>
    NProgress.start();
    (function() {
        NProgress.done();
    })();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.12.4.min.js')}}"><\/script>')</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->

@yield('javascript')

</body>
</html>