@extends('manager.menu_assets.app')

@section('titulo', 'Blog > Agregar publicación')

@section('body')
        <div class="col-md-9">
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
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
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consequatur cupiditate deleniti earum facilis fugiat illum impedit molestiae nisi nulla, officia optio provident quaerat quia quis, quo rerum ut, voluptatem!
        </div>
@endsection