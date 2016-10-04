@extends('manager.app')

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

            <div class="col-md-12 app-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Curso</th>
                        <th>Módulos</th>
                        <th>Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cursos as $curso)
                        <tr>
                            <td>{{ $curso->titulo }}</td>
                            <td>
                                 0 Módulos
                            </td>
                            <td style="width: 60px;">
                                <!-- Single button -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $curso->estado }} <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Draft</a></li>
                                        <li><a href="#">Publicado</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td style="width: 45px;">
                                <a href="{{ route('manager.cursos.editar', $curso->slug) }}" class="btn btn-small btn-primary">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#link-cursos').addClass('active');
    </script>
@endsection