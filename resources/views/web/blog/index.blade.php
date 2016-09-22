@extends('web.app')

@section('titulo', 'Blog')

@section('css')
    <style>
        .card {
            font-weight: 300;
            font-size: 1.5rem;
            width: 100%;
            margin-bottom: 25px;
            padding: 10px 15px;
            border-radius: 4px;
            background-color: #fff;
            border: 1px solid #eee;
            box-shadow: 0 1px 1px rgba(0,0,0,0.2);
        }

        .card__title {
            color: #333;

            margin: 15px 0;
            font-weight: 600;
            font-family: 'Lato', sans-serif;
            font-size: 2.5rem;
            letter-spacing: -.01em;
            line-height: 1;

        }

        .card__title a {
            color: #3e3e3e;
        }
        .card__title a:hover,
        .card__title a:focus {
            color: #cb1d2c;
        }

        .card__image {
            display: block;
            background-color: #ecf0f1;
            position: relative;
            margin: -10px -15px 0;
            height: 150px;
            background-size: cover;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .card__icon {
            display: inline-block;
            position: absolute;
            background: #2ecc71;
            color: #fff;
            border: 0.2rem solid #fff;
            border-radius: 50%;
            padding: 8px;
            bottom: -0.9em;
            right: 0.5em;
            font-size: 1.5em;
            width: 50px;
            height: 50px;
        }

        .card__content {
            font-weight: 300;
            color: #585858;
        }

        .card__footer {
            padding: 0.2em 0;
            margin: 1em 0 0.5em 0;
            font-size: 0.8em;
            font-weight: 300;
            color: #1abc9c;
        }


    </style>
@endsection

@section('body')
    <div class="container">
        <div class="masonry-container">
        @foreach($posts as $post)
            <div class="col-md-4 item">
                <article class="card">
                    <a href="{{route('web.post', $post->slug)}}">
                        <section class="card__image" style="background-image: url(https://unsplash.it/300/150)">
                            <span class="card__icon text-center">
                                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            </span>
                        </section>
                    </a>

                    <h2 class="card__title">
                        <a href="{{route('web.post', $post->slug)}}">
                            {{ $post->titulo }}
                        </a>
                    </h2>

                    <section class="card__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci numquam est minima ad placeat, animi laudantium doloribus vitae eligendi fugit rerum itaque porro! Officiis molestias aliquam dolorum placeat corrupti exercitationem!
                    </section>

                    <section class="card__footer">
                        {{ $post->created_at->format('Y-m-d') }}
                    </section>
                </article>
            </div>
        @endforeach

        </div>

        <div class="col-md-12">
            {{ $posts->links() }}
        </div>

    </div> <!-- /container -->
@endsection

@section('javascript')
    <script src="https://unpkg.com/masonry-layout@4.1.1/dist/masonry.pkgd.js"></script>
    <script>

        $('.masonry-container').masonry({
            // options
            columnWidth: '.item',
            itemSelector: '.item'
        });

    </script>
@endsection