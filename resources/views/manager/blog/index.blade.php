@extends('manager.menu_assets.app')

@section('titulo', 'Manager > Blog')

@section('body')

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="row text-left">
                    <a href="{{route('blog.agregar.publicacion')}}" class="btn btn-round btn-default" style="margin-bottom: 25px;">
                        Agregar categorias
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row text-right">
                    <a href="{{route('blog.agregar.publicacion')}}" class="btn btn-round btn-primary" style="margin-bottom: 25px;">
                        Agregar publicación
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12" style="background: #fff; padding: 10px; border-radius: 3px;">
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
                    <td>
                        {{$post->id}}
                    </td>
                    <td><a href="{{ route('blog.editar.publicacion',$post->slug) }}">{{ $post->titulo }}</a></td>
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