@extends('web.app')

@section('titulo', 'Index public course')

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        body{
            padding-top: 50px;
            background-color: #eee;
        }
        .jumbotron {
            background: url("https://enterprise.github.com/assets/releases/2.0.0/aws-bg-80b292690ba587b305c2c038c496ffc8ff08d3bf6be6c1ba64d48bedc09cc36f.jpg") no-repeat center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
@endsection

@section('body')
    <div class="jumbotron">
        <div class="container">
            <h1>GitHub</h1>
            <p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
            <p>To see the difference between static and fixed top navbars, just scroll.</p>
        </div>
    </div>
    <div class="container">
        <div class="col-md-5">
            <div class="sidebar-course">
                <div class="row">

                    <div class="col-md-12 info-course separador">
                        <div class="item col-md-4">
                            <i class="icon md-barcode"></i>
                            <h4><a href="#"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Lecciones</a></h4>
                            <p class="detail-course">20 contenidos</p>
                        </div>
                        <div class="item col-md-4">
                            <i class="icon md-time"></i>
                            <h4><a href="#"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Duración</a></h4>
                            <p class="detail-course">140 Hrs</p>
                        </div>
                        <div class="item col-md-4">
                            <i class="icon md-img-check"></i>
                            <h4><a href="#">
                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Inicio</a></h4>
                            <p class="detail-course">25 May 2014</p>
                        </div>
                    </div>

                </div>

            </div>


            <div class="col-md-12 text-center">
                <a href="#" class="btn btn-success btn-round">
                    Registrarme al curso
                </a>
            </div>
        </div>
        <div class="col-md-7">


            <ul class="list-group">
                <li class="list-group-item active leccion-titulo">
                    Lección #1: Introducción
                </li>
                <a href="{{ route('curso.single') }}">
                    <li class="list-group-item leccion-item">
                        <span class="leccion-index">
                            1
                        </span>
                        Dapibus ac facilisis in
                    </li>
                </a>
                <a href="{{ route('curso.single') }}">
                    <li class="list-group-item leccion-item">
                        <span class="leccion-index">
                            2
                        </span>
                        Cras sit amet nibh libero
                    </li>
                </a>
                <a href="{{ route('curso.single') }}">
                    <li class="list-group-item leccion-item">
                        <span class="leccion-index">
                            3
                        </span>
                        Porta ac consectetur ac
                    </li>
                </a>
                <a href="{{ route('curso.single') }}">
                    <li class="list-group-item leccion-item">
                        <span class="leccion-index">
                            4
                        </span>
                        Vestibulum at eros
                    </li>
                </a>
            </ul>

        </div>
    </div> <!-- /container -->
@endsection