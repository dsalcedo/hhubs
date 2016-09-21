@extends('manager.menu_assets.app')

@section('titulo', 'Manager > Blog')

@section('body')

        <a href="{{route('blog.agregar.publicacion')}}" class="btn btn-round btn-primary pull-right">
            Agregar publicación
        </a>


        <div class="col-md-12" style="background: #fff; padding: 10px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Estado</th>
                        <th>Creación</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->titulo }}</td>
                            <td>{{ $post->estado }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-12">
            {{ $posts->links() }}
        </div>


@endsection