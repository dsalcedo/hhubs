@extends('web.app')

@section('titulo', $post->titulo)

@section('meta')
    <meta property="fb:app_id" content="1631813623813201" />
    <meta property="og:type"   content="article" />
    <meta property="og:url"    content="{{route('blog.editar.publicacion', $post->slug)}}" />
    <meta property="og:title"  content="{{$post->titulo}}" />
    <meta property="og:image"  content="{{ asset($post->cover) }}" />
@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700|Montserrat" rel="stylesheet">

    <style>
        body {
            padding-top: 50px;
            background: #f4f4f4;
        }
        .img-fluid {
            width: 100%;
            max-height: 400px;
            display: block;
        }
        .cover{
            position: relative;
            width: 100%;
            display: block;
            max-height: 400px;
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
            padding-bottom: 5px;
            font-size: 18px;
            font-weight: 300;
            display: block;
            position: relative;
            width: 100%;
        }
        .creditos h1 {
            font-size: 40px;
            font-weight: 600;
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

        .media.card {
            background: #fff;
            border: 1px solid #f7f7f7;
            margin-bottom: 15px;
        }
        .media-heading {
            margin-top: 10px;
            margin-bottom: 0px;
        }
        .media-heading a {
            color: #080808;
        }
        .media-heading a:hover,
        .media-heading a:focus {
            color: #cb1d2c;
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

        }


        @media (max-width: 767px){
            .post-content {
                line-height: 130%;
            }
            .fb-save {
                margin-bottom: 10px;
            }
            .fb-like span,
            .fb-like iframe {
                width: 100%!important;
            }
            .creditos {
                padding-top: 0px;
            }

            .no-mobile {
                display: none;
            }
            .cover-content h1 {
                font-size: 2.7rem;
            }
            .cover:before{
                display: none;
            }
            .fb_iframe_widget {
                display: inline-block;
                position: relative;
                width: 100%;
            }

        }

    </style>
@endsection

@section('body')
    <div class="container-fluid" style="background:#fff; padding-bottom: 50px;">
        <div class="row">
            <div class="cover">
                <img src="{{$post->cover}}" class="img-fluid">
                @if(Auth::check())
                    @if(Auth::user()->hasRole('admin'))
                        <span style="position:fixed; right: 15px; bottom: 15px; background: #cb1d2c; padding: 10px; z-index:999;">
                            <a href="{{route('blog.editar.publicacion', $post->slug)}}" style="color:#fff ;">Editar publicación</a>
                        </span>
                    @endif
                @endif
            </div>

            <div class="col-md-3 no-mobile" style="padding-top: 40px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="media card">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img alt="100x100" class="media-object" data-src="holder.js/100x100" style="width: 100px; height: 100px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc1YTM3ODA4MiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzVhMzc4MDgyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Apple abrirá la primera Apple Store en la Ciudad de México
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="media card">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img alt="100x100" class="media-object" data-src="holder.js/100x100" style="width: 100px; height: 100px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc1YTM3ODA4MiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzVhMzc4MDgyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Apple abrirá la primera Apple Store en la Ciudad de México
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="media card">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img alt="100x100" class="media-object" data-src="holder.js/100x100" style="width: 100px; height: 100px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTc1YTM3ODA4MiB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NzVhMzc4MDgyIj48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMy40Njg3NSIgeT0iMzYuNSI+NjR4NjQ8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="#">
                                        Apple abrirá la primera Apple Store en la Ciudad de México
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="creditos">
                    <h1>{{$post->titulo}}</h1>
                    Por <span class="autor">{{$post->autor->nombre}}</span>

                    <p>
                        <span class="date-post">{{$post->created_at->format('d M Y')}}</span>
                    </p>
                </div>
                <div class="fb-save" data-uri="{{route('web.post', $post->slug)}}" data-size="large"></div>
                <div class="fb-share-button" data-href="{{route('web.post', $post->slug)}}" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{route('web.post', $post->slug)}}&src=sdkpreparse">
                        Compartir
                    </a>
                </div>
                <div class="post-content">

                    {!! $post->contenido !!}

                    <div class="fb-like" data-href="{{route('web.index')}}" data-layout="standard" data-action="like" data-size="large" data-show-faces="false" data-share="false" style="margin-top: 30px;"></div>

                </div>
            </div>

        </div>
    </div>

    <div class="container" style="padding-top: 50px;">
        <div class="row">
            <div class="col-md-3 no-mobile">
                <div style=" margin-bottom: 15px;" class="fb-page" data-href="https://www.facebook.com/hackrhub/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hackrhub/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hackrhub/">HackrHub</a></blockquote></div>
            </div>
            <div class="col-md-9">
                <div class="fb-comments col-md-12" data-href="{{route('web.post', $post->slug)}}" data-numposts="5"></div>
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