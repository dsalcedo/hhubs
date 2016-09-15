<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link href="//fonts.googleapis.com/css?family=Didact+Gothic|Jockey+One|Open+Sans:400,700|Oxygen|Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <link href="{{asset('css/navbar.css')}}" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
        }
    </style>

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
            <a class="navbar-brand" href="#">
                Curso de GitHub
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Anterior">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </a>
                </li>
                <li>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Siguiente">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span>
                    </a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
    <h4>
        Unidad 1 - Duis vel ullamcorper mauris, eu pretium felis. Duis gravida laoreet velit.
    </h4>
    <div class="col-md-10">
        <div class="video embed-responsive embed-responsive-16by9">
            <iframe src="//player.vimeo.com/video/104961644" class="embed-responsive-item"> </iframe>
        </div>
    </div>
    <div class="col-md-2"></div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.12.4.min.js')}}"><\/script>')</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>