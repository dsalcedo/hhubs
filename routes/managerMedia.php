<?php

Route::group([
    'middleware' => ['auth', 'roles'],
    'roles'=> ['admin'],
    'prefix'=>'media/blog',
    'namespace'=>'Manager\Media'
], function (){
    Route::post('test/upload', 'MediaBlogController@test')->name('media.upload.test');
    Route::post('upload', 'MediaBlogController@upload')->name('media.upload.blog');
});
