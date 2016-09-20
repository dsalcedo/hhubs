<?php

Route::group(['prefix'=>'media/blog', 'namespace'=>'Media'], function (){
    Route::post('upload', 'MediaBlogController@upload')->name('media.upload.blog');
});
