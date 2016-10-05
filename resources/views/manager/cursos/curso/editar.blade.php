@extends('manager.app')

@section('titulo', 'Editar > '.$curso->titulo)

@section('css')
    {!! Html::style('libs/summernote/summernote.css') !!}
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
        .preview-thumbnail {
            background: #e0e0e0;
            width: 100%;
            height: 200px;
            margin-top: 15px;
        }
        textarea,
        .note-editor.note-frame .note-editing-area .note-editable {
            color: #515151;
            font-family: 'Crimson Text', serif;
            font-size: 22px;
            line-height: 160%;
        }
        .manager-curso-tabs {
            background: #f5f5f5;
        }
        .nav-tabs>li>a {
            margin-right: 2px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 2px 2px 0 0;
        }
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover {
            color: #cb1d2c;
            cursor: default;
            background-color: #fff;
            border: 1px solid #ddd;
            border-bottom-color: transparent;
        }
        .tab-content {
            background: #ffffff;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            border-bottom: 1px solid #ddd;
            padding: 15px;
        }
        .btn-papper {
            border-radius: 2px;
        }
        .sorter {
            cursor: move;
            background: #f5f5f5;
        }
        .sorting-row {
            background: #f5f5f5;
        }
        .panel {
            border : 0px;
            margin-bottom: 10px!important;
        }
        .panel-default>.panel-heading {
            border:1px solid #ddd;
        }
        .panel-body {
            border-left:1px solid #ddd;
            border-top:0px transparent!important;
            border-right:1px solid #ddd;
        }
    </style>
@endsection

@section('body')
    <div class="col-md-12">
        <div class="row">


            <ul class="nav nav-tabs manager-curso-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#content-curso" aria-controls="home" role="tab" data-toggle="tab">
                        <i class="fa fa-bookmark-o" aria-hidden="true"></i> Curso
                    </a>
                </li>
                <li role="presentation">
                    <a href="#content-lecciones" aria-controls="profile" role="tab" data-toggle="tab">
                        <i class="fa fa-list-ol" aria-hidden="true"></i> Lecciónes
                    </a>
                </li>
                <li role="presentation">
                    <a href="#content-modulos" aria-controls="profile" role="tab" data-toggle="tab">
                        <i class="fa fa-th-list" aria-hidden="true"></i> Módulos
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Curso manager-->
                <div role="tabpanel" id="content-curso" class="tab-pane active">
                    <div class="row">
                        {!! Form::model($curso,['route'=>['manager.cursos.update', $curso->slug]]) !!}
                            <div class="col-md-9" style="margin-bottom: 30px;">
                                <div class="form-group">
                                    <label>Título</label>
                                    {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Escribe un título', 'maxlength'=>255,'autofocus']) !!}
                                </div>
                                <div class="form-group">
                                    <label>Descripción</label>
                                    {!! Form::textarea('contenido', null, ['id'=>'summernote']) !!}
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="col-md-12" style="margin-bottom: 15px;">
                                    <div class="row">
                                        <span class="btn btn-primary open-modal" data-toggle="modal" data-target="#myModal" data-item="tarjeta">Cargar tarjeta</span>
                                        <div class="preview-thumbnail" id="tarjeta">
                                            {!!
                                            (!is_null($curso->tarjeta)) ? '<img src="'.asset('media/curso/'.$curso->tarjeta->media->archivo).'" class="img-responsive">' : null
                                            !!}
                                        </div>
                                        {!! Form::hidden('tarjeta_id', (!is_null($curso->tarjeta)) ? $curso->tarjeta->media->id : null ) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="titulo">Carrera</label>
                                    {!! Form::select('carrera_id', $carreras, null, ['class'=>'form-control','placeholder'=>'Selecciona carrera']) !!}
                                </div>
                                <div class="form-group">
                                    <label for="titulo">Estado del curso</label>
                                    {!! Form::select('estado', ['draft' => 'Draft', 'publicado' => 'Publicado'], null, ['class'=>'form-control']) !!}
                                </div>
                                <div class="checkbox">
                                    <label>
                                        {!! Form::checkbox('gratuito', '1', null) !!} Marcar como gratuito
                                    </label>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <button type="submit" class="btn btn-default">
                                            Guardar publicación
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- Módulos manager-->
                <div role="tabpanel" id="content-lecciones" class="tab-pane">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="#" class="btn btn-primary btn-papper" data-toggle="modal" data-target="#modal-leccion">
                                Agregar lección
                            </a>
                        </div>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <table id="tabla-modulos" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50"></th>
                                        <th width="50">#</th>
                                        <th>Título</th>
                                        <th>Módulos</th>
                                    </tr>
                                </thead>
                                <tbody id="tabla-lecciones">
                                @foreach($curso->lecciones as $leccion)
                                    <tr data-posicion="{{ $leccion->index }}" data-id="{{ $leccion->id }}">
                                        <th scope="row" class="text-center sorter">
                                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                        </th>
                                        <td class="text-left index">{{ $leccion->index }}</td>
                                        <td class="text-left">{{ $leccion->titulo }}</td>
                                        <td width="80" class="text-left">0</td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-primary btn-papper">Agregar módulo</a>
                                        </td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-default">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Lecciones manager-->
                <div role="tabpanel" id="content-modulos" class="tab-pane">
                    <div class="row">

                        <div class="col-md-12" style="margin-top: 15px;">

                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @foreach($curso->lecciones as $leccion)
                                <div class="panel panel-default">
                                    <div class="panel-heading"  id="data{{$leccion->id}}" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$leccion->id}}" aria-expanded="true" aria-controls="collapse{{$leccion->id}}">
                                        <h4 class="panel-title" >
                                            <span class="pull-right">
                                                <i class="fa fa-bookmark" aria-hidden="true" style="color: #cb1d2c;"></i>
                                            </span>
                                            #{{ $leccion->index. ' ' .$leccion->titulo }}
                                        </h4>
                                    </div>
                                    <div id="collapse{{$leccion->id}}" class="panel-collapse collapse {{($loop->first) ? 'in':''}}" role="tabpanel" aria-labelledby="collapse{{$leccion->id}}">
                                        <div class="panel-body">
                                            <div class="col-md-12 text-right">
                                                <div class="row">
                                                    <a href="#" class="btn btn-primary btn-papper">Agregar módulo</a>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th width="50"></th>
                                                <th width="50">#</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-center sorter">
                                                        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                                    </th>
                                                    <td>1</td>
                                                    <td>Otto</td>
                                                    <td width="100" class="text-center">
                                                        <a href="#" class="btn btn-default">Editar</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-center sorter">
                                                        <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                                    </th>
                                                    <td>2</td>
                                                    <td>Ottos</td>
                                                    <td width="100" class="text-center">
                                                        <a href="#" class="btn btn-default">Editar</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal agregrar leccion -->
    <div class="modal fade" id="modal-leccion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Agregar lección</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="leccionTitulo">Título</label>
                        {!! Form::text('titulo_leccion', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <label for="leccionDescripcion">Descripción</label>
                        {!! Form::textarea('descripcion', null, ['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="guardar-leccion">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'media.upload.cursoTarjeta', 'files' => true, 'class'=>'dropzone', 'id'=>'mediaUpload']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    {!! Html::script('libs/summernote/summernote.min.js') !!}
    {!! Html::script('libs/summernote/lang/summernote-es-ES.min.js') !!}
    {!! Html::script('libs/rowsorter/RowSorter.js') !!}
    <script>
        $('#link-cursos').addClass('active');
        $(document).ready(function() {
            var setTo = null;
            $(document).on('click', '.open-modal', function () {
                setTo = $(this).data('item');
            });
            $('#summernote').summernote({
                dialogsInBody: true,
                lang: 'es-ES',
                height: 300,
                minHeight: 300,
                maxHeight: null,
                focus: false,
                fontNames: ['Arial', 'Helvetica Neue', 'Lucida Grande', 'Lato', 'Crimson Text'],
                fontNamesIgnoreCheck: ['Arial', 'Helvetica Neue', 'Lucida Grande', 'Lato', 'Crimson Text'],
                hint: {
                    words: ['Hackrhub', 'hackrhub'],
                    match: /\b(\w{1,})$/,
                    search: function (keyword, callback) {
                        callback($.grep(this.words, function (item) {
                            return item.indexOf(keyword) === 0;
                        }));
                    }
                },
                callbacks: {
                    onImageUpload: function(files, editor, welEditable) {

                        var formData = new FormData();
                        formData.append('archivo', files[0]);

                        $.ajax({
                            type:'POST',
                            url: '{{route('media.upload.cursos')}}',
                            data:formData,
                            cache:false,
                            contentType: false,
                            processData: false,
                            success:function(url){
                                var image = '{{ asset('/media/curso/') }}/'+url;
                                $('#summernote').summernote('editor.insertImage', image);
                            },
                            error: function(err){
                                console.log(err);
                            }
                        });

                    }
                }
            });

            Dropzone.autoDiscover = false;

            $("#mediaUpload").dropzone({
                paramName: "archivo", // The name that will be used to transfer the file
                maxFilesize: 1, // MB
                addRemoveLinks: true,
                maxFiles: 1,
                dictDefaultMessage: "Subir imagen destacada",
                init: function() {
                    this.on("complete", function(file) {
                        var ruta = JSON.parse(file.xhr.response);

                        var url ='{{asset('media/curso')}}/' + ruta.archivo;
                        $('#'+setTo).empty();
                        $('input[name=tarjeta_id]').val(ruta.id);
                        $('<img />',{ id: 'image-preview', src: url, class: 'img-responsive' }).appendTo($('#'+setTo));
                        $('#myModal').modal('hide');

                        var _ref;
                        return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0
                    });
                    this.on("removedfile", function () {
                        //$('.preview-thumbnail').empty();
                        //$('input[name=cover]').val('');
                    });
                },
                removedfile: function(file) {
                    var _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                }
            });
        });

        //Tabla de módulos
        $("#tabla-modulos").rowSorter({
            handler    : 'th.sorter',
            tbody      : true,
            tableClass : 'sorting-table',
            dragClass  : 'sorting-row',
            onDrop     : function (tbody, fila, index) {
                var items = $('tr[data-posicion]');
                $.each(items, function (i, item) {
                    $item = $(item);
                    i = i+1;
                    $item.data('posicion', i);
                });
            }
        });

        $(document).on('click', '#guardar-leccion', function (e) {
            var $titulo  = $('input[name=titulo_leccion]'),
                $textarea= $('textarea[name=descripcion]'),
                $boton   = $('#guardar-leccion');

            if($titulo.val() !=''){
                $boton.text('Guardando...').addClass('disabled').attr('disabled', true);
                $.ajax({
                    method:'post',
                    url: '{{route('manager.curso.leccion.create', $curso->id)}}',
                    data: { 'titulo': $titulo.val(), 'descripcion': $textarea.val() }
                }).done(function (res) {
                    if(res.success){
                        $titulo.val('');
                        $textarea.val('');
                        $boton.text('Guardar').removeClass('disabled').removeAttr('disabled');
                        var template = '<tr data-posicion="'+res.data.index+'">' +
                                            '<th scope="row" class="text-center sorter"> ' +
                                                '<span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> ' +
                                            '</th> ' +
                                            '<td class="text-left index">'+res.data.index+'</td> ' +
                                            '<td class="text-left">'+res.data.titulo+'</td> ' +
                                            '<td width="100" class="text-center"> ' +
                                                '<a href="#" class="btn btn-default">Agregar módulo</a> ' +
                                            '</td> ' +
                                            '<td width="100" class="text-center"> ' +
                                                '<a href="#" class="btn btn-primary">Editar</a> ' +
                                            '</td> ' +
                                        '</tr>';

                        $('#tabla-lecciones').append(template);
                    }


                }).fail(function (jqXHR, textStatus, error) {
                    console.log(jqXHR, textStatus, error)
                });
            }

           e.preventDefault();
        });
    </script>
@endsection