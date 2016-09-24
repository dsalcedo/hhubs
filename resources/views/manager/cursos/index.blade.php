@extends('manager.menu_assets.app')

@section('titulo', 'Manager > Cursos')

@section('body')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row text-right">
                    <a href="{{route('blog.agregar.publicacion')}}" class="btn btn-round btn-primary" style="margin-bottom: 25px;">
                        Agregar un curso
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection