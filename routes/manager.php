<?php


Route::group([
    'middleware' => ['auth', 'roles'],
    'roles'=> ['admin'],
    'namespace'  => 'Manager'
], function ($router) {
    Route::get('/', 'ManagerController@index')->name('manager.index');
    Route::get('logout', 'ManagerController@logout')->name('manager.salir');


    Route::get('cursos', 'Cursos\CursosController@index')->name('manager.cursos');
    Route::get('cursos/crear', 'Cursos\CursosController@crearCurso')->name('manager.cursos.crear');
    Route::post('cursos/crear', 'Cursos\CursosController@create')->name('manager.cursos.create');

    Route::get('cursos', 'Cursos\CursosController@index')->name('manager.cursos');
    Route::get('curso/{cursoSlug}', 'Cursos\CursosController@curso')->name('manager.curso');

});


