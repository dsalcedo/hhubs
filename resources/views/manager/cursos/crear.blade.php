@extends('manager.app')

@section('titulo', 'Manager > Crear curso')

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
    </style>
@endsection

@section('body')
    <div class="col-md-12">
        <div class="row">
            {!! Form::open(['route'=>'manager.cursos.create']) !!}
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
                        <div class="preview-thumbnail" id="tarjeta"></div>
                        {!! Form::hidden('tarjeta_id', null) !!}
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
    </script>
@endsection