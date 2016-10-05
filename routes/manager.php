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

    Route::group(['prefix'=>'cursos'], function (){
        Route::get('/', 'Cursos\CursosController@index')->name('manager.cursos');
        Route::get('curso/{cursoSlug}', 'Cursos\CursosController@curso')->name('manager.curso');
        Route::get('crear', 'Cursos\CursosController@crearCurso')->name('manager.cursos.crear');
        Route::post('crear', 'Cursos\CursosController@create')->name('manager.cursos.create');

        Route::get('editar/{cursoSlug}', 'Cursos\CursosController@updateCurso')->name('manager.cursos.editar');
        Route::post('curso/editar/{cursoSlug}', 'Cursos\CursosController@updateCurso')->name('manager.cursos.update');
        //Lecciones
        Route::post('curso/{cursoId}/lecciones/crear', 'Cursos\CursosLeccionesController@createLeccion')->name('manager.curso.leccion.create')->where('cursoId', '[0-9]+');;
    });


    Route::group(['prefix'=>'suscripciones', 'namespace'=>'Suscripciones'], function (){
        Route::get('/', 'SuscripcionesController@index')->name('manager.suscripciones');
        Route::get('crear', 'SuscripcionesController@create')->name('manager.suscripciones.crear');
        Route::post('crear', 'SuscripcionesController@store')->name('manager.suscripciones.crear.store');
        Route::get('editar/{idSuscripcion}', 'SuscripcionesController@edit')->name('manager.suscripciones.edit');
        Route::post('editar/{idSuscripcion}', 'SuscripcionesController@update')->name('manager.suscripciones.update');
    });



});


