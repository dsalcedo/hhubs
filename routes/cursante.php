<?php

Route::get('/', 'CursanteController@index')->name('app.index');
Route::get('mis-cursos', 'CursanteController@index')->name('app.misCursos');
Route::get('mis-certificaciones', 'CursanteController@index')->name('app.misCertificaciones');

Route::get('perfil', 'PerfilController@index')->name('app.perfil');
Route::post('perfil', 'PerfilController@update')->name('perfil.update');
Route::get('suscripcion', 'SuscripcionController@index')->name('app.suscripcion');
