@extends('manager.menu_assets.app')

@section('titulo', 'Index')

@section('css')
    <style>
        .container_model{
            padding-left: 15px !important;
        }
        @media(min-width: 1440px){
            .container_model{
                padding-left: 0px !important;
            }
        }
    </style>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="container_model">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-sw-10 col-md-10"></div>
                                <div class="col-sw-2 col-md-2 text-right">
                                    <span class="fa fa-angle-up"  data-toggle="collapse" data-target="#demo"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body collapse in" id="demo">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Left side Navigation</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <span class="fa fa-angle-up"  data-toggle="collapse" data-target="#demo2"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body collapse in" id="demo2">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Left side Navigation</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-sw-2 col-md-2 text-right">
                                    <span class="fa fa-angle-up"  data-toggle="collapse" data-target="#demo3"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body collapse in" id="demo3">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Left side Navigation</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-sw-10 col-md-10"></div>
                                <div class="col-sw-2 col-md-2 text-right">
                                    <span class="fa fa-angle-up"  data-toggle="collapse" data-target="#demo4"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body collapse in" id="demo4">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Left side Navigation</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <span class="fa fa-angle-up"  data-toggle="collapse" data-target="#demo5"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body collapse in" id="demo5">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Left side Navigation</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-10"></div>
                                <div class="col-md-2">
                                    <span class="fa fa-angle-up"  data-toggle="collapse" data-target="#demo6"></span>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body collapse in" id="demo6">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Left side Navigation</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $(function() {
            $('#toolbar').stop().animate({'margin-right':'-105px'},1000);

            function toggleTools() {
                var $inner = $("#toolbar");
                if ($inner.css("margin-right") == "-105px") {
                    $inner.animate({'margin-right': '0'});
                    $(".toolbutton").html('<i class="fa fa-times"></i>')
                }
                else {
                    $inner.animate({'margin-right': "-105px"});
                    $(".toolbutton").html('<i class="fa fa-bug"></i>')
                }
            }
            $(".toolbutton").bind("click", function(e){
                toggleTools();
                e.preventDefault();
            });

        });
    </script>
@endsection