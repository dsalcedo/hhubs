@extends('manager.menu_assets.app')

@section('titulo', 'Manager > Cursos')

@section('body')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row text-right">
                    <a href="{{route('manager.cursos.crear')}}" class="btn btn-round btn-primary" style="margin-bottom: 25px;">
                        Agregar un curso
                    </a>
                </div>
            </div>

            @foreach($cursos as $curso)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail card">
                    <div class="caption">
                        <h3 class="text-center card-title">
                            <a href="{{ route('manager.cursos.editar') }}">
                                {{ $curso->titulo }}
                            </a>
                        </h3>
                    </div>
                    <div class="thumbnail-card-art">
                        <span class="label label-primary card-art">
                            {{ $curso->carrera->titulo }}
                        </span>
                        <a href="{{ route('manager.cursos.editar') }}">
                            <img src="{{ $curso->cover }}" alt="...">
                        </a>
                    </div>
                    <div class="caption">
                        <span class="text-muted small text-uppercase">
                            {{ $curso->estado }}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection