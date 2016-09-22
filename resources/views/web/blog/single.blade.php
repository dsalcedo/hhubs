@extends('web.app')

@section('titulo', $post->titulo)

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">

    <style>
        body {
            padding-top: 51px;
        }
        .img-fluid {
            width: 100%;
            height: auto;
            display: block;
        }
        .cover{
            position: relative;
            width: 100%;
            display: block;
            min-height: 300px;
            max-height: 700px;
        }
        .cover:before{
            content: "";
            position: absolute;
            width: 100%;
            z-index: 100;
            left: 0;
            right: 0;
            bottom: 0px;
            top: 0;
            background: rgba(0,0,0,.8) none;
            background-size: 100% 100%;
            background: none,-webkit-linear-gradient(top,rgba(0,0,0,0) 50%,rgba(0,0,0,.8));
            background: none,linear-gradient(180deg,rgba(0,0,0,0) 50%,rgba(0,0,0,.8));
            pointer-events: none;
        }
        .cover-titulo {
            bottom: 10px;
        }
        .cover-content {
            color: #fff;
            text-shadow: 0 1px 3px rgba(0,0,0,.4);
            position: absolute;
            bottom: 20px;
            left: 7%;
            padding: 0;
            max-width: 530px;
            z-index: 1;
        }
        .cover-content h1 {
            letter-spacing: -.02em;
            font-family: 'Noto Sans', sans-serif;
            font-weight: 700;
        }

        .post-content {
            padding: 0 7%;
        }

        @media (min-width: 768px){
            .cover-content {
                color: #fff;
                text-shadow: 0 1px 3px rgba(0,0,0,.4);
                position: absolute;
                bottom: 20px;
                left: 7%;
                z-index: 100;
                width: 100%;
                padding: 0;
            }

        }


        @media (max-width: 767px){

            .no-mobile {
                display: none;
            }
            .cover-content {
                left: 0;
                position: relative;
                color: #3c4656;
                text-shadow: none!important;
                font-size: 1.4rem;
                width: 100%;
                display: block;
                padding: 7%;
                z-index: 1;
            }
            .cover-content h1 {
                font-size: 2.7rem;
            }
            .cover:before{
                display: none;
            }

        }
    </style>
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 no-mobile">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur harum quibusdam quis rem voluptatibus. Animi dignissimos eveniet illo iusto modi quae quam suscipit! Assumenda dolorem fugit, hic id obcaecati saepe.
            </div>
            <div class="col-md-7">
                <div class="row" style="background: #fff;">
                    <div class="cover">
                        <img src="{{$post->cover}}" class="img-fluid">
                        <div class="cover-content">
                            <h1 class="cover-titulo text-left">{{$post->titulo}}</h1>
                            <div class="creditos">Por <span style="font-weight: 700;">{{$post->autor->nombre}}</span> {{$post->created_at->format('d M Y')}}</div>
                        </div>
                    </div>
                    <div class="post-content">
                        {!! $post->contenido !!}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eius enim maiores quidem reiciendis. Adipisci aperiam consectetur consequuntur dignissimos doloremque eius, enim esse facere illum, incidunt ipsam non numquam quo.
            </div>
        </div>
    </div>
@endsection