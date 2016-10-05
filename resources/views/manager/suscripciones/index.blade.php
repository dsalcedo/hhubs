@extends('manager.app')

@section('titulo', 'Manager > Suscripciones > Crear')

@section('body')

    <div class="col-md-12">
        <div class="row text-right">
            <a href="{{route('manager.suscripciones.crear')}}" class="btn btn-round btn-primary" style="margin-bottom: 25px;">
                Agregar suscripción
            </a>
        </div>
    </div>

    <div class="col-md-12 app-content">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Duración</th>
                    <th>Precio</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
            @foreach($suscripciones as $suscripcion)
                <tr>
                    <td>{{ $suscripcion->titulo }}</td>
                    <td>{{ $suscripcion->duracion }} días</td>
                    <td>${{ $suscripcion->precio }} MXN</td>
                    <td>{{ ($suscripcion->activo) ? 'Activo' : 'Inactivo' }}</td>
                    <td width="80">
                        <a href="{{ route('manager.suscripciones.edit', $suscripcion->id) }}" class="btn btn-primary">
                            Editar
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascript')
    <script>
        $('#link-suscripciones').addClass('active');
    </script>
@endsection