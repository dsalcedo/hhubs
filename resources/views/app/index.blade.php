@extends('web.app')

@section('titulo', 'Indexs')

@section('body')
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail card">
                    <div class="caption">
                        <h3 class="text-center card-title">
                            <a href="{{route('web.curso')}}">
                                Aprende Vue.js
                            </a>
                        </h3>
                    </div>
                    <div class="thumbnail-card-art">
                        <span class="label label-primary card-art">Web</span>
                        <a href="{{route('web.curso')}}">
                            <img src="http://learnplus.themekit.io/assets/images/vuejs.png" alt="...">
                        </a>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">ADVANCED</span>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolores et eum ex, excepturi expedita fuga fugit ipsa magnam magni nam nihil numquam placeat quaerat quam repellendus tenetur, veritatis vitae?
                        </p>
                        <div class="progress-content"></div>
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
                    <div class="thumbnail-card-art">
                        <span class="label label-primary card-art">Web</span>
                        <a href="{{route('web.curso')}}">
                            <img src="http://learnplus.themekit.io/assets/images/nodejs.png" alt="...">
                        </a>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">BEGINNER</span>
                        <p>
                            Developing static website with fast and advanced gulp setup by managing all parts...
                        </p>
                        <div class="progress-content"></div>
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
                    <div class="thumbnail-card-art">
                        <span class="label label-primary card-art">Web</span>
                        <a href="{{route('web.curso')}}">
                            <img src="http://learnplus.themekit.io/assets/images/github.png" alt="...">
                        </a>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">INTERMEDIATE</span>
                        <p>
                            Learn the basics of Github and become a power Github developer.
                        </p>
                        <div class="progress-content">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
@endsection