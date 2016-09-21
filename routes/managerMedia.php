<?php

Route::group(['prefix'=>'media/blog', 'namespace'=>'Media'], function (){
    Route::post('test/upload', 'MediaBlogController@test')->name('media.upload.test');
    Route::post('upload', 'MediaBlogController@upload')->name('media.upload.blog');
});
