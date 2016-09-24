<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_csrf" content="{{ csrf_token() }}">
    <link rel="icon" href="../../favicon.ico">

    <title>@yield('titulo')</title>

    <link href="//fonts.googleapis.com/css?family=Jockey+One|Lato|Montserrat|Crimson+Text:400" rel="stylesheet">

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
        .menu-hackr {
            background-color: #222 !important;
            padding: 15px 15px 15px 15px;
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            border-radius: 0 !important;
        }
        .nav-stacked >li a {
            osition: relative;
            display: block;
            padding-left: 35px;
        }
       .nav-stacked .menu-hackr:hover {
            background-color: #353535!important;
        }
        a.menu {
            color: #828282 !important;
            text-decoration: none;
            font-weight: bold !important;
        }
        a.menu:hover {
            color: #cb1d2c !important;
            text-decoration: none;
            font-weight: bold !important;
        }

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
        .has-feedback label~.form-control-feedback {
            top: 29px;
            color: #d6d6d6;
            font-size: 20px;
        }
        .row-navHHub{
            padding-top: 15px;padding-bottom: 15px;
        }
        @media (min-width: 768px) {
            .modal-dialog {
                width: 420px;
                margin: 30px auto;
            }
        }

        .navbar-nav{
            padding-left: 0px !important;
        }

        .navbar .panel-body{
            padding: 0;
        }


        .navbar-fixed-left {
            width: 200px;
            top: 50px;
            position: fixed !important;
            border-radius: 0;
            height: 100%;
        }

        .navbar-fixed-left .navbar-nav > li {
            float: none;  /* Cancel default li float: left */
            width: 199px;
        }

        .navbar-fixed-left + .container {
            padding-left: 200px;
        }

        /* On using dropdown menu (To right shift popuped) */
        .navbar-fixed-left .navbar-nav > li > .dropdown-menu {
            margin-top: -50px;
            margin-left: 200px;
        }

        .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
            color: #cb1d2c !important;
            font-weight: bold;
            background-color: transparent;
        }

        .fa{
            padding-right: 5px !important;
        }
        .btn-bugR{
            background: #cb1d2c !important;
        }
        .btn-bugR{
            color: #ffffff !important;
        }

        .wrap{position: relative}

        #toolbar{
            display: block;
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: 999;
            min-height: 20px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            padding: 9px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            margin-right: -105px;
        }

        .collapse.in {
            display: block;
            background: #272727;
        }

        @media(max-width: 768px){
            .navbar-fixed-left {
                display: none;
            }

            .navbar-fixed-left .navbar-nav > li {
                display: none;
            }

            .navbar-fixed-left + .container {
                padding-left: 20px;
            }

            /* On using dropdown menu (To right shift popuped) */
            .navbar-fixed-left .navbar-nav > li > .dropdown-menu {
                display: none;
            }
        }
        @media(min-width: 1440px){
            .navbar-fixed-left + .container {
                padding-left: 90px !important;
            }
        }
    </style>
</head>

<body>

<!-- Fixed navbar -->
@include('manager.menu_assets.navbar')

<div class="container-fluid">
    <div class="row">
        <div class="navbar navbar-inverse navbar-fixed-left">
            <div class="nav nav-pills nav-stacked panel-group" id="accordion" >
                <div class="panel menu-hackr">
                    <a class="menu" href="#" >
                        <span class="fa fa-home"></span> Home
                    </a>
                </div>
                <div class="panel menu-hackr">
                    <div role="tab" id="headingOne">
                        <a href="#subCursos" class="menu" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="subCursos">
                            <span class="fa fa-book"></span> Cursos <span class="caret"></span>
                        </a>
                    </div>
                </div>
                <div id="subCursos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <ul class="navbar-nav nav-stacked">
                            <li class="nav"><a href="{{ route('manager.cursos') }}">Ver todos</a></li>
                            <li class="nav"><a href="{{ route('manager.cursos.crear') }}">Crear</a></li>
                        </ul>
                    </div>
                </div>
                <div class="panel menu-hackr">
                    <a href="{{ route('manager.blog.index') }}" id="link-blog" class="menu">
                        <span class="fa fa-th-large"></span> Blog
                    </a>
                </div>
                <div class="panel menu-hackr">
                    <a class="menu" href="#" >
                        <span class="fa fa-briefcase"></span> Profesores
                    </a>
                </div>
                <div class="panel menu-hackr">
                    <a class="menu" href="#">
                        <span class="fa fa-users"></span> Alumnos
                    </a>
                </div>
                <div class="panel menu-hackr">
                    <a class="menu" href="#" >
                        <span class="fa fa-money"></span> Pagos
                    </a>
                </div>
                <div class="panel menu-hackr">
                    <div role="tab" id="headingTwo">
                        <a class="menu" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <span class="fa fa-cogs"></span> Perfil <span class="caret"></span>
                        </a>
                    </div>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <ul class="navbar-nav nav-stacked">
                            <li class="nav"><a href="#">Sub Menu1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-2">
            @yield('body')
        </div>
    </div>
</div>
<div class="wrap">
    <div id="toolbar">
        <a class="btn btn-sm btn-bugR toolbutton" href="#">
            <i class="fa fa-bug"></i>
        </a>  
        <button class="btn btn-bugL btn-sm" data-toggle="modal" data-target="#report">
            Reportar bug
        </button>
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

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_csrf"]').attr('content')
        }
    });

    $(function() {
        $('#toolbar').stop().animate({'margin-right':'-105px'},1000);

        function toggleTools() {
            var $inner = $("#toolbar");
            if ($inner.css("margin-right") == "-105px") {
                $inner.animate({'margin-right': '0'});
                $(".toolbutton").html('<i class="fa fa-times"></i>')
            }
            else {
                $inner.animate({'margin-right': "-105px"});
                $(".toolbutton").html('<i class="fa fa-bug"></i>')
            }
        }
        $(".toolbutton").bind("click", function(e){
            toggleTools();
            e.preventDefault();
        });

    });
</script>
@yield('javascript')

</body>
</html>