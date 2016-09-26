@extends('manager.menu_assets.app')

@section('titulo', 'Crear carrera')

@section('body')
    <div class="col-md-12 app-content">
        {!! Form::open(['route'=>'manager.carrera.create']) !!}
            <div class="form-group">
                <label for="nombre">Nombre de la carrera</label>
                {!! Form::text('titulo', null, ['class'=>'form-control', 'maxlength'=>'255']) !!}
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                {!! Form::select('estado', ['draft' => 'Draft', 'publicada' => 'Publicada'], null, ['class'=>'form-control']) !!}
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('manager.carreras') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection

@section('javascript')
    <script>
        $('#link-carreras').addClass('active');
    </script>
@endsection