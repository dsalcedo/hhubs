<?php


Route::group([
    'middleware' => ['auth', 'roles'],
    'roles'=> ['admin'],
    'namespace'  => 'Manager'
], function ($router) {
    Route::get('/', 'ManagerController@index')->name('manager.index');
    Route::get('logout', 'ManagerController@logout')->name('manager.salir');
});


