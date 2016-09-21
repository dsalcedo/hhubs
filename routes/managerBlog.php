<?php
Route::group(['prefix'=>'blog', 'namespace'=>'Blog'], function (){
    Route::get('/', 'BlogController@index')->name('manager.blog.index');
    Route::get('agregar/publicacion', 'PublicacionController@agregarPublicacion')->name('blog.agregar.publicacion');
    Route::post('agregar/publicacion', 'PublicacionController@createPublicacion')->name('blog.create.publicacion');
});