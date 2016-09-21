<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
| http://envato.megadrupal.com/html/megacourse/learning.html
*/

Route::get('/', 'Web\WebController@index')->name('web.index');
Route::post('acceso', 'Auth\LoginController@login')->name('web.login');
Route::post('registro', 'Auth\RegisterController@register')->name('web.registro');

Route::get('curso', 'Web\WebController@curso')->name('web.curso');
Route::get('curso/single', 'Web\WebController@single')->name('curso.single');