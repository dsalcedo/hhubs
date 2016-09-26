<?php


Route::group([
    'middleware' => ['auth', 'roles'],
    'roles'=> ['admin'],
    'namespace'  => 'Manager'
], function ($router) {
    Route::get('/', 'ManagerController@index')->name('manager.index');
    Route::get('logout', 'ManagerController@logout')->name('manager.salir');

    Route::get('carreras', 'Carreras\CarrerasController@index')->name('manager.carreras');
    Route::get('carrera/crear', 'Carreras\CarrerasController@crearCarrera')->name('manager.carrera.crear');
    Route::post('carrera/crear', 'Carreras\CarrerasController@create')->name('manager.carrera.create');
    Route::get('carrera/editar/{carreraSlug}', 'Carreras\CarrerasController@editarCarrera')->name('manager.carrera.editar');
    Route::post('carrera/editar/{carreraSlug}', 'Carreras\CarrerasController@updateCarrera')->name('manager.carrera.update');

    Route::get('cursos', 'Cursos\CursosController@index')->name('manager.cursos');
    Route::get('cursos/crear', 'Cursos\CursosController@crearCurso')->name('manager.cursos.crear');
    Route::post('cursos/crear', 'Cursos\CursosController@create')->name('manager.cursos.create');
    Route::post('curso/editar', 'Cursos\CursosController@create')->name('manager.cursos.editar');

    Route::get('cursos', 'Cursos\CursosController@index')->name('manager.cursos');
    Route::get('curso/{cursoSlug}', 'Cursos\CursosController@curso')->name('manager.curso');

});


