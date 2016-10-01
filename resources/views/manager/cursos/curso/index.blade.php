@extends('manager.app')

@section('titulo', $curso->titulo)

@section('css')
    <style>
        .btn-square,
        .btn-rounded {
            padding: 2px 4px;
            font-size: 13px;
        }
        .sorter{
            background: #f5f5f5;
            color: #a5a5a5;
            cursor: move;
            width: 30px;
        }
        .sorting-row {background-color: #f5f5f5;}

        .sort-handler {float: right; background-color: #f80; width: 14px; height: 14px; margin: 2px 0 0 6px; cursor: move;}
    </style>
@endsection
@section('body')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12" style="background: #fff; padding: 15px;">
                <a href="#" class="btn btn-round btn-primary pull-right" style="margin-top: 25px;">
                    Agregar módulo
                </a>
                <h1>{{$curso->titulo}}</h1>
                <h2>Módulos</h2>
                <table class="table table-bordered"
                       id="modulos"
                       data-toggle="table"
                       data-detail-view="true"
                       data-detail-formatter="detailFormatter">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="text-center" style="width: 45px;">#</th>
                            <th>Título</th>
                            <th>Lecciones</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="sorter">
                                <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                            </th>
                            <td class="text-center">1</td>
                            <td>Github Webhooks for Beginners</td>
                            <td>
                                <a href="" class="btn btn-square">
                                    12
                                    Lecciones
                                </a>
                            </td>
                            <td>
                                <span class="label label-success">
                                    Publicado
                                </span>
                            </td>
                            <td style="width: 45px;">
                                <a href="" class="btn btn-small btn-primary">Editar</a>
                            </td>
                        </tr>
                        <tr>
                            <th class="sorter">
                                <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                            </th>
                            <td class="text-center">2</td>
                            <td>
                                Github Webhooks for Beginners II
                            </td>
                            <td>
                                <a href="" class="btn btn-small btn-square">
                                    7
                                    Lecciones
                                </a>
                            </td>
                            <td>
                                <span class="label label-default">
                                    Draft
                                </span>
                            </td>
                            <td style="width: 45px;">
                                <a href="" class="btn btn-small btn-primary">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    {!! Html::script('libs/rowsorter/RowSorter.js') !!}
    <style src="//issues.wenzhixin.net.cn/bootstrap-table/assets/bootstrap-table/src/bootstrap-table.js"></style>
    <script>
        $("#modulos").rowSorter({
            handler: "th.sorter",
            onDragStart : function (tbody, row, index, oldIndex) {

            },
            onDrop      : function (tbody, row, index, oldIndex) {
                console.log(tbody);
            }
        });

        function detailFormatter(index, row) {
            var html = [];
            $.each(row, function (key, value) {
                html.push('<p>a</p>');
            });
            return html.join('');
        }
    </script>
@endsection