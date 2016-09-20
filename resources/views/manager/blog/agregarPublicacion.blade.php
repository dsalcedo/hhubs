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
    </style>
@endsection

@section('body')
    {!! Form::open(['route'=>'blog.create.publicacion']) !!}
    <div class="col-md-9" style="margin-bottom: 30px;">
        <div class="form-group">
                {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Escribe un título', 'maxlength'=>255,'autofocus']) !!}
            </div>
            <div class="form-group">
                <textarea id="summernote" name="post">Hello Summernote</textarea>
            </div>

    </div>
    <div class="col-md-3">
        <div class="col-md-12" style="margin-bottom: 30px;">
            <div class="row">
                <span class="btn btn-default"  data-toggle="modal" data-target="#myModal">Cargar imagen destacada</span>
            </div>
        </div>
        <div class="form-group">
            <label for="titulo">Estado de la publicación</label>
            <select class="form-control">
                <option value="guardado">Guardado</option>
                <option value="publicadi">Publicado</option>
            </select>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="destacado" value="1"> Marcar como destacado
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
                    <button type="button" class="btn btn-primary">Terminar</button>
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
                lang: 'es-ES', // default: 'en-US'
                height: 300,
                minHeight: 300,
                maxHeight: null,
                focus: false,
                fontNames: [
                    'Arial', 'Helvetica Neue', 'Lucida Grande',
                    'Verdana', 'Didact Gothic', 'Jockey One',
                    'Open Sans', 'Oxygen',
                    'Lato', 'Noto Sans'
                ],
                fontNamesIgnoreCheck: ['Arial', 'Helvetica Neue', 'Lucida Grande',
                    'Verdana', 'Didact Gothic', 'Jockey One',
                    'Open Sans', 'Oxygen',
                    'Lato', 'Noto Sans'],
                hint: {
                    words: ['Hackrhub', 'hackrhub'],
                    match: /\b(\w{1,})$/,
                    search: function (keyword, callback) {
                        callback($.grep(this.words, function (item) {
                            return item.indexOf(keyword) === 0;
                        }));
                    }
                }
                /*callbacks: {
                    onImageUpload: function(files) {
                        // Evitamos que se puedan pegar imágenes.
                        //null;
                    }
                }*/
            });
        });

        Dropzone.autoDiscover = false;


        $("#mediaUpload").dropzone({
            paramName: "archivo", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            addRemoveLinks: true,
            maxFiles: 1,
            dictDefaultMessage: "Subir imagen destacada",
            removedfile: function(file) {
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            accept: function(file, done) {
                console.log(file)
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                }
                else { done(); }
            }
        });



    </script>
@endsection