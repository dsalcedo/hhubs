@extends('manager.menu_assets.app')

@section('titulo', 'Blog > Agregar publicación')

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
    {!! Form::open(['route'=>'blog.create.publicacion']) !!}
    <div class="col-md-9" style="margin-bottom: 30px;">
        <div class="form-group">
            {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Escribe un título', 'maxlength'=>255,'autofocus']) !!}
        </div>
        <div class="form-group">
            {!! Form::textarea('contenido', null, ['id'=>'summernote']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12" style="margin-bottom: 30px;">
            <div class="row">
                <span class="btn btn-default" data-toggle="modal" data-target="#myModal">Cargar imagen destacada</span>
                <div class="preview-thumbnail"></div>
                {!! Form::hidden('cover', null) !!}
            </div>
        </div>
        <div class="form-group">
            <label for="titulo">Estado de la publicación</label>
            {!! Form::select('estado', ['draft' => 'Draft', 'publicado' => 'Publicado'], null, ['class'=>'form-control']) !!}
        </div>
        <div class="checkbox">
            <label>
                {!! Form::checkbox('destacado', '1') !!} Marcar como destacado
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



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'media.upload.blog', 'files' => true, 'class'=>'dropzone', 'id'=>'mediaUpload']) !!}
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
        $(document).ready(function() {
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
                            url: '{{route('media.upload.blog')}}',
                            data:formData,
                            cache:false,
                            contentType: false,
                            processData: false,
                            success:function(url){
                                var image = '{{ asset('/media/blog/') }}/'+url;
                                $('#summernote').summernote('editor.insertImage', image);
                            },
                            error: function(err){
                                console.log(err);
                            }
                        });

                        // upload image to server and create imgNode...
                        //$summernote.summernote('insertNode', imgNode);
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
                        var url ='{{asset('media/blog')}}/' + JSON.parse(file.xhr.response);
                        $('.preview-thumbnail').empty();
                        $('input[name=cover]').val(url);
                        $('<img />',{ id: 'image-preview', src: url, class: 'img-responsive' }).appendTo($('.preview-thumbnail'));
                        $('#myModal').modal('hide');
                    });
                    this.on("removedfile", function () {
                        $('.preview-thumbnail').empty();
                        $('input[name=cover]').val('');
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