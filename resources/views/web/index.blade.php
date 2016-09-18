@extends('web.app')

@section('titulo', 'Index')

@section('body')
    <style>
        .thumbnail .progress {
            height: 5px;
        }
        .thumbnail .progress .progress-bar {
            background: #37abf2;
        }
        .card-art{
            position: absolute;
            bottom: 15px;
            right: 15px;
        }
    </style>
    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">
            <h1>Navbar example</h1>
            <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>To see the difference between static and fixed top navbars, just scroll.</p>
            <p>
                <a class="btn btn-lg btn-primary btn-round" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
            </p>
        </div>


        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail card">
                    <div class="caption">
                        <h3 class="text-center card-title">
                            <a href="{{route('web.curso')}}">
                                Aprende VueJs
                            </a>
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <span class="label label-primary card-art">Web</span>
                            <a href="{{route('web.curso')}}">
                                <img src="http://learnplus.themekit.io/assets/images/vuejs.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">ADVANCED</span>
                        <p>
                            Let’s start with a quick tour of Vue’s data binding features. If you are more interested in ...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail card">
                    <div class="caption">
                        <h3 class="text-center card-title">
                            <a href="{{route('web.curso')}}">
                                NodeJS
                            </a>
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <span class="label label-primary card-art">Web</span>
                            <a href="{{route('web.curso')}}">
                                <img src="http://learnplus.themekit.io/assets/images/nodejs.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">BEGINNER</span>
                        <p>
                            Developing static website with fast and advanced gulp setup by managing all parts...
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail card">
                    <div class="caption">
                        <h3 class="text-center card-title">
                            <a href="{{route('web.curso')}}">
                                Curso de Github
                            </a>
                        </h3>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <span class="label label-primary card-art">Web</span>
                            <a href="{{route('web.curso')}}">
                                <img src="http://learnplus.themekit.io/assets/images/github.png" alt="...">
                            </a>
                        </div>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">INTERMEDIATE</span>
                        <p>
                            Learn the basics of Github and become a power Github developer.
                        </p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
@endsection