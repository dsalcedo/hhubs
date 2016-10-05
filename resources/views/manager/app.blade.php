<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_csrf" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('titulo')</title>

    <link href="//fonts.googleapis.com/css?family=Jockey+One|Lato|Montserrat|Crimson+Text:400" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('libs/nprogress/nprogress.css')}}" rel="stylesheet">
    <link href="{{asset('css/core.css')}}" rel="stylesheet">
    <link href="{{asset('css/manager.css')}}" rel="stylesheet">

    @yield('css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
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
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li id="link-dashboard">
                        <a href="{{ route('manager.index') }}"><i class="fa fa-globe" aria-hidden="true"></i> Dashboard</a>
                    </li>
                    <li id="link-carreras"><a href="{{ route('manager.carreras') }}" ><i class="fa fa-graduation-cap" aria-hidden="true"></i> Carreras</a></li>
                    <li id="link-cursos"><a href="{{ route('manager.cursos') }}" id="link-cursos"><span class="fa fa-book"></span> Cursos</a></li>
                    <li><a href=""><i class="fa fa-briefcase" aria-hidden="true"></i> Instructores</a></li>
                    <li><a href=""><i class="fa fa-users" aria-hidden="true"></i> Cursantes</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li id="link-suscripciones"><a href="{{ route('manager.suscripciones') }}"><i class="fa fa-credit-card" aria-hidden="true"></i> Suscripciones</a></li>
                    <li><a href=""><span class="fa fa-money"></span> Pagos</a></li>
                    <li><a href=""><i class="fa fa-gift" aria-hidden="true"></i> Promociones</a></li>
                    <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Mailing</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="#"><i class="fa fa-bug" aria-hidden="true"></i> Bugs</a></li>
                    <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i> Estadísticas</a></li>
                    <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Perfil</a></li>
                    <li><a href="{{ route('manager.salir') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Desconectarme</a></li>
                </ul>
            </div>
            <div id="webapp" class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 webapp">
                @yield('body')
            </div>
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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_csrf"]').attr('content')
            }
        });
    </script>
    @yield('javascript')
</body>
</html>