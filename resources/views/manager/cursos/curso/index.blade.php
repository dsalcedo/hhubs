@extends('manager.menu_assets.app')

@section('titulo', 'Manager > Curso')

@section('body')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row text-right">
                    <a href="{{route('blog.agregar.publicacion')}}" class="btn btn-round btn-primary" style="margin-bottom: 25px;">
                        Editar información
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection