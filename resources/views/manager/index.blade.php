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
            z-index: 999;
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
    <div class="navbar navbar-inverse navbar-fixed-left">
        <ul class="nav navbar-nav">
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
    <div class="container">
        <div class="row">
            <h2>Left side Navigation bar (Fixed)</h2>

            <p>Left side Navigation</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet, nisl eu porttitor sollicitudin, odio massa facilisis magna, a ultrices purus justo sed tellus. Nunc vehicula scelerisque elit, vitae eleifend arcu pellentesque sit amet. Aenean quis mauris malesuada lacus mattis aliquet in ac enim. In scelerisque leo in urna iaculis luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed feugiat nisi et elit ornare malesuada. Nunc ornare laoreet lacinia. Vestibulum vitae volutpat leo, vitae pulvinar orci. Ut eget orci faucibus, aliquet felis pharetra, maximus lacus. Pellentesque in felis vel risus rutrum dictum. Integer a mauris sit amet odio hendrerit ultrices. Integer pharetra nisi tortor, nec elementum dui suscipit nec. Etiam bibendum mauris ac turpis egestas mattis. Duis efficitur nisl sed mollis eleifend.

                Mauris est purus, feugiat at dui sit amet, suscipit laoreet felis. In congue diam vel semper placerat. Quisque eget lectus imperdiet, congue orci nec, suscipit massa. Curabitur nec magna ac magna pharetra bibendum. Sed sed sodales massa, quis efficitur quam. Mauris nec ligula nunc. Sed lacinia venenatis risus eu mattis. Vivamus scelerisque elit massa, a sodales arcu aliquet vel. Fusce tristique tempor ligula, sit amet iaculis felis condimentum et. Praesent vulputate lectus id diam blandit ornare.

                Aliquam iaculis varius tincidunt. Proin eu turpis vitae mauris varius porta. Nunc sed purus ligula. Mauris vel risus accumsan, eleifend nisi sed, posuere nulla. Maecenas dictum odio eu auctor finibus. Vestibulum varius aliquam nibh ac consectetur. Integer vel purus sed tellus rhoncus fermentum vitae posuere elit. Morbi aliquet commodo lacus sed tristique. Mauris placerat varius aliquet. Pellentesque pharetra odio metus. Morbi dictum velit diam, id pulvinar neque consequat sit amet. In vitae erat at quam varius convallis eget finibus orci. Nunc ac euismod nisl, at vehicula nisl. Curabitur interdum hendrerit suscipit.

                Quisque facilisis tortor ipsum, nec tempor massa efficitur sed. Vivamus id ipsum enim. Vivamus dapibus bibendum scelerisque. Pellentesque faucibus, tellus id elementum pharetra, augue massa iaculis lorem, at vulputate lacus neque eu felis. Nam auctor lacus ut lacus fringilla, ut viverra ante semper. Proin condimentum mauris non purus egestas, non ultrices diam dignissim. Pellentesque a volutpat lacus. In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

                Fusce diam magna, egestas in hendrerit ac, venenatis sed sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras dictum leo ac consectetur lobortis. Ut condimentum ex ac felis suscipit posuere. Aenean scelerisque, leo id pulvinar varius, libero sem laoreet elit, ut convallis magna velit porttitor nunc. In rutrum vehicula sapien, eget imperdiet est elementum quis. Phasellus mollis risus et condimentum dictum. Mauris leo est, efficitur eget viverra sed, consequat sed lorem.

                Morbi eleifend felis ac rhoncus rutrum. Phasellus et libero et leo venenatis sollicitudin. Aenean venenatis diam vel tincidunt varius. Ut eget nisi cursus, imperdiet neque vel, congue tellus. Nulla maximus laoreet congue. Nunc in lectus neque. Vestibulum vel lorem sit amet mi aliquet auctor nec id risus. Nam consequat fringilla justo, at luctus nisl sodales ac. Donec nec lacinia ligula. Vestibulum urna quam, faucibus euismod felis quis, feugiat condimentum erat. Nullam interdum ex non convallis euismod. Duis dignissim enim quis arcu ullamcorper feugiat. Nam sed mollis dui. Donec tristique purus eget iaculis varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris pretium, justo nec posuere sagittis, dui ante pellentesque diam, dictum vehicula dui nisl non augue.

                Quisque venenatis tellus ut ex malesuada lobortis. Etiam suscipit leo at nulla pellentesque tincidunt. Fusce sit amet ultricies felis, a tristique lectus. Cras maximus cursus justo, eget pretium nulla volutpat non. In hac habitasse platea dictumst. Donec hendrerit, velit at pellentesque auctor, nunc urna dapibus odio, in posuere risus urna vulputate augue. Aenean dictum tristique magna at tempus. Vestibulum gravida sem arcu, id viverra nulla varius vitae.

                Maecenas vitae mauris quis mauris eleifend rhoncus. Donec elementum arcu sagittis dolor dictum, sit amet euismod diam finibus. Pellentesque at leo sit amet urna varius dignissim. Maecenas vel arcu consectetur, auctor turpis vel, finibus elit. Morbi et neque id dolor blandit auctor. Aliquam mollis, nibh scelerisque iaculis congue, ipsum massa sodales quam, eget finibus nisi erat commodo velit. Etiam dapibus lorem sit amet justo interdum, eget tincidunt orci ultrices. Phasellus suscipit diam nibh, at placerat eros placerat sit amet. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vel iaculis ante, a feugiat enim. Cras purus odio, placerat facilisis posuere et, fringilla tempor ligula. Fusce ac enim et nulla mollis vestibulum non sed massa. Aliquam ac posuere mi. Nulla ut risus ut nulla tempor elementum.

                Praesent cursus, purus vel maximus blandit, risus ipsum luctus ex, at elementum augue mi eget massa. Sed enim risus, rhoncus sed diam in, suscipit volutpat augue. Aenean ultricies interdum tellus, sit amet venenatis magna posuere at. Nunc id tortor erat. Nullam interdum risus quam, ut vehicula lacus facilisis maximus. Vivamus ornare varius dignissim. Nam arcu urna, vestibulum in bibendum at, aliquam ac purus. Maecenas et finibus massa, vel vestibulum urna. Phasellus justo felis, consectetur at diam et, elementum convallis ex. Vivamus ornare consectetur enim pulvinar sollicitudin. Praesent eu lobortis turpis.

                Duis posuere tempus odio vel venenatis. Duis at turpis erat. Nullam efficitur vulputate nibh eget placerat. Aenean vitae vulputate nunc, et vehicula purus. Praesent pharetra egestas magna ac tincidunt. Proin dictum lectus elit, in condimentum libero volutpat vel. Etiam ut maximus orci. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam viverra dolor in dolor fringilla consequat.
            </p>
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