<?php
Route::group([
    'middleware' => ['auth', 'roles'],
    'roles'      => ['admin'],
    'prefix'     => 'blog',
    'namespace'  => 'Manager\Blog'
], function () {
    Route::get('/', 'BlogController@index')->name('manager.blog.index');
    Route::get('agregar/publicacion', 'PublicacionController@agregarPublicacion')->name('blog.agregar.publicacion');
    Route::post('agregar/publicacion', 'PublicacionController@createPublicacion')->name('blog.create.publicacion');
    Route::get('editar/publicacion/{postSlug}', 'PublicacionController@editarPublicacion')->name('blog.editar.publicacion');
    Route::post('editar/publicacion/{postSlug}', 'PublicacionController@updatePublicacion')->name('blog.update.publicacion');

    Route::get('agregar/categoria', 'PublicacionController@agregarPublicacion')->name('blog.agregar.categoria');
});