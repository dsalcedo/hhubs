@extends('app.app')

@section('titulo', 'Mi perfil')

@section('css')
    <style>
        input[type=text],
        input[type=password],
        textarea
        {
            border-radius: 5px;
            padding: 11px 10px;
            height: auto;
            outline: 0;
            font-size: 18px;
            color: #355368;
            border: 1px solid #a9a9a9;
        }
        .select-style {
            padding: 0;
            margin: 0;
            border: 1px solid #a9a9a9;
            width: 100%;
            border-radius: 3px;
            overflow: hidden;
            background: #fff url("http://www.scottgood.com/jsg/blog.nsf/images/arrowdown.gif") no-repeat 98% 50%;
        }

        .select-style select {
            padding: 11px 10px;
            width: 100%;
            border: none;
            box-shadow: none;
            background-color: transparent;
            background-image: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            vertical-align: middle;
            line-height: 1.42857143;
            border-radius: 4px;
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            font-size: 18px;
            color: #355368;

        }

        .select-style select:focus {
            outline: none;
        }
    </style>
@endsection

@section('body')
    <div class="container">
        <div class="col-md-6">
            <div class="row">
                {!! Form::model($usuario, ['route' => ['perfil.update', $usuario->id]]) !!}
                    <div class="form-group">
                        <label for="nombreCompleto">Nombre completo</label>
                        {!! Form::text('nombre', null, ['class'=>'form-control', 'autofocus']) !!}
                    </div>
                    <div class="form-group">
                        <label for="correoElectronico">Correo electrónico</label>
                        {!! Form::text('email', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'mi@correo.com']) !!}
                    </div>
                    <div class="form-group">
                        <label for="pais">País</label>
                        <div class="select-style">
                            <select>
                                <option value="mx">México</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input type="text" class="form-control" id="estado">
                    </div>
                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <input type="text" class="form-control" id="municipio">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion">
                        <p class="help-block">Asegúrate de escribir correctamente tu domicilio, ahí es donde enviaremos tus certificados.</p>
                    </div>
                    <div class="form-group">
                        <label for="cp">Código Postal</label>
                        <input type="text" class="form-control" id="cp" maxlength="5">
                    </div>

                    <button type="submit" class="btn btn-success btn-round">Actualizar información</button>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-md-6" style="padding-top: 25px;">
            <p class="text-center">
                <a href="#" class="btn btn-lg btn-facebook" style="width: 300px;">
                    <i class="fa fa-facebook"></i> Vincula tu cuenta de Facebook
                </a>
            </p>
            <p class="text-center">
                <a href="#" class="btn btn-lg btn-twitter" style="width: 300px;">
                    <i class="fa fa-twitter"></i> Vincula tu cuenta de Twitter
                </a>
            </p>
        </div>

    </div>

@endsection