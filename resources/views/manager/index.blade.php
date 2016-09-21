@extends('manager.menu_assets.app')

@section('titulo', 'Index')

@section('css')
    <style>
        .navbar-fixed-left {
            width: 200px;
            top: 50px;
            position: fixed !important;
            border-radius: 0;
            height: 100%;
        }

        .navbar-fixed-left .navbar-nav > li {
            float: none;  /* Cancel default li float: left */
            width: 200px;
        }

        .navbar-fixed-left + .container {
            padding-left: 200px;
        }
        .container_model{
            margin-right: 15px !important;
            margin-left: 15px !important;
        }

        /* On using dropdown menu (To right shift popuped) */
        .navbar-fixed-left .navbar-nav > li > .dropdown-menu {
            margin-top: -50px;
            margin-left: 200px;
        }

        .navbar-inverse .navbar-nav>li>a:focus, .navbar-inverse .navbar-nav>li>a:hover {
            color: #cb1d2c !important;
            font-weight: bold;
            background-color: transparent;
        }

        .fa{
            padding-right: 5px !important;
        }
        .btn-bugR{
            background: #cb1d2c !important;
        }
        .btn-bugR{
            color: #ffffff !important;
        }

        .wrap{position: relative}

        #toolbar{
            display: block;
            position: fixed;
            bottom: 0;
            right: 0;
            z-index: 9999;
            min-height: 20px;
            margin-bottom: 20px;
            background-color: #f5f5f5;
            border: 1px solid #e3e3e3;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
            padding: 9px;
            -webkit-border-radius: 3px;
            border-radius: 3px;
            margin-right: -105px;
        }

        @media(max-width: 768px){
            .navbar-fixed-left {
                display: none;
            }

            .navbar-fixed-left .navbar-nav > li {
                display: none;
            }

            .navbar-fixed-left + .container {
                padding-left: 20px;
            }

            /* On using dropdown menu (To right shift popuped) */
            .navbar-fixed-left .navbar-nav > li > .dropdown-menu {
                display: none;
            }
        }
        @media(min-width: 1440px){
            .navbar-fixed-left + .container {
                padding-left: 90px !important;
            }
        }
    </style>
@endsection

@section('body')
    <div class="row">
        <div class="col-md-2">
            <div class="navbar navbar-inverse navbar-fixed-left">

                <ul class="nav navbar-nav " id="menu-content">
                    <li> <a href="#"><span class="fa fa-home" aria-hidden="true"></span> Inicio</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-book"></span> Cursos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Sub Menu1</a></li>
                            <li><a href="#">Sub Menu2</a></li>
                            <li><a href="#">Sub Menu3</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Sub Menu4</a></li>
                            <li><a href="#">Sub Menu5</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span class="fa fa-th-large"></span>Blog</a></li>
                    <li><a href="#"><span class="fa fa-suitcase"></span>Profesores</a></li>
                    <li><a href="#"><span class="fa fa-users"></span>Almnos</a></li>
                    <li><a href="#"><span class="fa fa-money"></span>Pagos</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cogs"></span>Perfil <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Mi cuenta</a></li>
                            <li><a href="#">Opciones</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="container_model">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-sw-10 col-md-10"></div>
                                <div class="col-sw-2 col-md-2">
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
                                <div class="col-md-2">
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
                                <div class="col-sw-2 col-md-2">
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
    <div class="wrap">
        <div id="toolbar">
            <a class="btn btn-sm btn-bugR toolbutton" href="#">
                <i class="fa fa-bug"></i>
            </a>  
            <button class="btn btn-bugL btn-sm" data-toggle="modal" data-target="#report">
                Reportar bug
            </button>
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