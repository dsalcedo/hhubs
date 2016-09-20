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
    <div class="col-md-9">
        <form>
            <div class="form-group">
                <label for="titulo">Título de la publicación</label>
                <input type="text" class="form-control" id="titulo" placeholder="Escribe un título" maxlength="255" autofocus>
            </div>
            <div class="form-group">
                <div id="summernote">Hello Summernote</div>
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
    <div class="col-md-3">
        {!! Form::open(['route'=>'media.upload.blog', 'files' => true, 'class'=>'dropzone', 'id'=>'mediaUpload']) !!}
        {!! Form::close() !!}
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
                },
                callbacks: {
                    onImageUpload: function(files) {
                        // Evitamos que se puedan pegar imágenes.
                        //null;
                    }
                }
            });
        });

        Dropzone.autoDiscover = false;


        $("#mediaUpload").dropzone({
            paramName: "archivo", // The name that will be used to transfer the file
            maxFilesize: 1, // MB
            addRemoveLinks: true,
            maxFiles: 1,
            removedfile: function(file) {
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            accept: function(file, done) {
                if (file.name == "justinbieber.jpg") {
                    done("Naha, you don't.");
                }
                else { done(); }
            }
        });



    </script>
@endsection