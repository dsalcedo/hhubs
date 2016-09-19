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
        .has-feedback label~.form-control-feedback {
            top: 29px;
            color: #d6d6d6;
            font-size: 20px;
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
@include('manager.menu_assets.navbar')

@yield('body')

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