@extends('web.app')

@section('titulo', $post->titulo)

@section('meta')
    <meta property="og:url"           content="{{route('blog.editar.publicacion', $post->slug)}}" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="{{$post->titulo}}" />
    <meta property="og:description"   content="" />
    <meta property="og:image"         content="{{ asset($post->cover) }}" />
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700|Montserrat" rel="stylesheet">

    <style>
        body {
            padding-top: 50px;
            background: #ffffff;
        }
        .img-fluid {
            width: 100%;
            max-height: 500px;
            display: block;
        }
        .cover{
            position: relative;
            width: 100%;
            display: block;
            max-height: 500px;
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
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }

        .post-content {
            padding: 0;
            color: #515151;
            font-family: 'Crimson Text', serif;
            font-size: 22px;
            line-height: 160%;
        }

        .creditos {
            padding-top: 20px;
            padding-bottom: 20px;
            font-size: 18px;
            font-weight: 300;
        }
        .autor {
            color: #b10c1b;
        }

        .date-post {
            font-size: 16px;
        }

        .fb_ltr,
       .fb-comments span
         {
            width: 100%!important;
        }

        @media (min-width: 1200px){
            .container {
                width: 800px;
            }
        }
        @media (min-width: 768px){
            .fb_iframe_widget {
                display: inline-block;
                position: relative;
            }
            .fb-comments{
                display: block;
                width: 100%;
            }
            .cover-content {
                color: #fff;
                text-shadow: 0 1px 3px rgba(0,0,0,.4);
                position: absolute;
                bottom: 20px;
                left: 20%;
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

        .w3_whatsapp_btn {
            background-image: url('http://w3lessons.info/demo/whatsapp-share-jquery/icon.png');
            border: 1px solid rgba(0, 0, 0, 0.1);
            display: inline-block !important;
            position: relative;
            font-family: Arial,sans-serif;
            letter-spacing: .4px;
            cursor: pointer;
            font-weight: 400;
            text-transform: none;
            color: #fff;
            border-radius: 4px;
            background-color: #5cbe4a;
            background-repeat: no-repeat;
            line-height: 1.2;
            text-decoration: none;
            text-align: left;
            vertical-align: top;
        }

        .w3_whatsapp_btn_small {
            font-size: 12px;
            background-size: 16px;
            background-position: 5px 2px;
            padding: 3px 6px 3px 25px;
        }

        .w3_whatsapp_btn_medium {
            font-size: 16px;
            background-size: 20px;
            background-position: 4px 2px;
            padding: 4px 6px 4px 30px;
        }

        .w3_whatsapp_btn_large {
            font-size: 16px;
            background-size: 20px;
            background-position: 5px 5px;
            padding: 3px 6px 4px 30px;
            color: #fff;
        }

        a.whatsapp { color: #fff;}
    </style>
@endsection

@section('body')
    <div class="container-fluid">
        <div class="row">
           <!-- <div class="col-md-2 no-mobile">
                <div style="margin-top: 15px; margin-bottom: 15px;" class="fb-page" data-href="https://www.facebook.com/hackrhub/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hackrhub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hackrhub/">HackrHub</a></blockquote></div>
            </div>-->
            <div class="col-md-12">
                <div class="row" style="background: #fff;">
                    <div class="cover">
                        <img src="{{$post->cover}}" class="img-fluid">
                        @if(Auth::check())
                            @if(Auth::user()->hasRole('admin'))
                            <span style="position:fixed; right: 15px; bottom: 15px; background: #cb1d2c; padding: 10px; z-index:999;">
                                <a href="{{route('blog.editar.publicacion', $post->slug)}}" style="color:#fff ;">Editar publicación</a>
                            </span>
                            @endif
                        @endif
                        <div class="cover-content">
                            <h1 class="cover-titulo text-left">{{$post->titulo}}</h1>
                        </div>
                    </div>
                    <div class="container">
                        <div class="creditos">
                            Por <span class="autor">{{$post->autor->nombre}}</span>
                            <div class="pull-right">
                                <div class="fb-share-button" data-href="{{route('blog.editar.publicacion', $post->slug)}}" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('blog.editar.publicacion', $post->slug)}}&amp;src=sdkpreparse">
                                        Compartir
                                    </a>
                                </div>
                            </div>
                            <p>
                                <span class="date-post">{{$post->created_at->format('d M Y')}}</span>
                            </p>
                        </div>
                        <div class="post-content">
                            {!! $post->contenido !!}
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                <div class="row" style="background-color: #efefef;margin-top: 2em;padding: 3.125em 0;">
                    <div class="container">
                        <div class="fb-comments col-md-12" data-href="{{route('blog.editar.publicacion', $post->slug)}}" data-numposts="5"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection

@section('javascript')
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1631813623813201";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
@endsection