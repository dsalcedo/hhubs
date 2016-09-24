<?php

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles'=> ['admin'],
    'prefix'=>'media/blog',
    'namespace'=>'Manager\Media'
], function (){
    Route::post('test/upload', 'MediaBlogController@test')->name('media.upload.test');
    Route::post('blog/upload', 'MediaBlogController@upload')->name('media.upload.blog');
    Route::post('cursos/upload', 'MediaCursosController@upload')->name('media.upload.cursos');
});
