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
        .sorting-row{
            background: #f5f5f5;
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
                                <div class="col-md-12" style="margin-bottom: 30px;">
                                    <div class="row" style="margin-bottom: 15px;">
                                        <div class="col-md-6">
                                            <span class="btn btn-primary open-modal" data-toggle="modal" data-target="#myModal" data-item="tarjeta">Cargar tarjeta</span>
                                            <div class="preview-thumbnail" id="tarjeta"></div>
                                            {!! Form::hidden('tarjeta', null) !!}
                                        </div>
                                        <div class="col-md-6">
                                            <span class="btn btn-primary open-modal" data-toggle="modal" data-target="#myModal" data-item="cover">Cargar imagen destacada</span>
                                            <div class="preview-thumbnail" id="cover"></div>
                                            {!! Form::hidden('cover', null) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
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
                    <div class="row text-right">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary btn-papper">Agregar módulo</a>
                        </div>
                        <div class="col-md-12" style="margin-top: 15px;">
                            <table id="tabla-modulos" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="50"></th>
                                        <th width="50">#</th>
                                        <th>Título</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-posicion="1">
                                        <th scope="row" class="text-center sorter">
                                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                        </th>
                                        <td class="text-left">1</td>
                                        <td>Otto</td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-default">Editar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center sorter">
                                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                        </th>
                                        <td class="text-left">2</td>
                                        <td>Otto</td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-default">Editar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center sorter">
                                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                        </th>
                                        <td class="text-left">3</td>
                                        <td>Otto</td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-default">Editar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center sorter">
                                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                        </th>
                                        <td class="text-left">4</td>
                                        <td>Otto</td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-default">Editar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center sorter">
                                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                                        </th>
                                        <td class="text-left">5</td>
                                        <td>Otto</td>
                                        <td width="100" class="text-center">
                                            <a href="#" class="btn btn-default">Editar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Lecciones manager-->
                <div role="tabpanel" id="content-modulos" class="tab-pane">
                    <div class="row text-right">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-primary btn-papper">Agregar lección</a>
                        </div>
                    </div>
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
                    {!! Form::open(['route'=>'media.upload.cursos', 'files' => true, 'class'=>'dropzone', 'id'=>'mediaUpload']) !!}
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
                        var url ='{{asset('media/curso')}}/' + JSON.parse(file.xhr.response);
                        $('#'+setTo).empty();
                        $('input[name='+setTo+']').val(url);
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
            handler         : 'th.sorter',
            tbody           : true,
            tableClass      : 'sorting-table',
            dragClass       : 'sorting-row'
        });
    </script>
@endsection