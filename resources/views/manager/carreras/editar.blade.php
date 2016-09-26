@extends('manager.menu_assets.app')

@section('titulo', 'Crear carrera')

@section('body')
    <div class="col-md-12 app-content">
        {!! Form::model($carrera,['route'=>['manager.carrera.update', $carrera->slug]]) !!}
        <div class="form-group">
            <label for="nombre">Nombre de la carrera</label>
            {!! Form::text('titulo', null, ['class'=>'form-control', 'maxlength'=>'255']) !!}
        </div>
        <div class="form-group">
            <label for="estado">Estado</label>
            {!! Form::select('estado', ['draft' => 'Draft', 'publicada' => 'Publicada'], null, ['class'=>'form-control']) !!}
        </div>
        <button type="submit" class="btn btn-default">Guardar</button>
        {!! Form::close() !!}
    </div>
@endsection