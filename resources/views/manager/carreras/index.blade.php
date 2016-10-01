@extends('manager.app')

@section('titulo', 'Manager > Carreras')

@section('body')
    <div class="col-md-12">
        <div class="row text-right">
            <a href="{{route('manager.carrera.crear')}}" class="btn btn-round btn-primary" style="margin-top:25px; margin-bottom: 25px;">
                Agregar carrera
            </a>
        </div>
    </div>
    <div class="col-md-12 app-content">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Carrera</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            @foreach($carreras as $carrera)
                <tr>
                    <td>{{ $carrera->titulo }}</td>
                    <td style="width: 60px;">
                        <span class="label label-success">
                            {{ $carrera->estado }}
                        </span>
                    </td>
                    <td style="width: 45px;">
                        <a href="{{ route('manager.carrera.editar', $carrera->slug) }}" class="btn btn-small btn-primary">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
    <script>
        $('#link-carreras').addClass('active');
    </script>
@endsection