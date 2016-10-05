@extends('manager.app')

@section('titulo', 'Manager > Suscripciones')

@section('body')
    <div class="col-md-12 app-content">
        {!! Form::Model($suscripcion, ['route'=>['manager.suscripciones.update', $suscripcion->id] ]) !!}
        <div class="form-group">
            <label for="titulo">Título</label>
            {!! Form::text('titulo', null, ['class'=>'form-control', 'autofocus']) !!}
        </div>
        <div class="form-group">
            <label for="titulo">Días de duración</label>
            {!! Form::number('duracion', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="titulo">Precio</label>
            <div class="input-group">
                <div class="input-group-addon">$</div>
                {!! Form::number('precio', null, ['class'=>'form-control']) !!}
                <div class="input-group-addon">.00</div>
            </div>
        </div>
        <div class="form-group">
            <label for="titulo">Estado</label>
            {!! Form::select('activo',['si'=>'Suscripción activa','no'=>'Suscripción inactiva'], null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <label for="titulo">¿Visible para todos?</label>
            {!! Form::select('publico',['si'=>'Si, visible para todos','no'=>'No, visible para algunos'], null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-12 text-right">
            <div class="row">
                <a href="{{ route('manager.suscripciones') }}" class="btn btn-danger" style="margin-right: 15px;">Cancelar</a>
                <input type="submit" class="btn btn-success" value="Actualizar">
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('javascript')
    <script>
        $('#link-suscripciones').addClass('active');
    </script>
@endsection