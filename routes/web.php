<?php
Route::get('/', 'HomeController@login');

Auth::routes(['register'=> false]);

Route::get('/proyectos','PagesController@proyectosList')->name('admin.proyectos.index')->middleware('auth');
Route::get('/crear-proyecto','PagesController@crear_proyecto')->name('admin.proyectos.crear_proyecto');
Route::post('/proyectos','PagesController@store')->name('admin.proyectos.store');


Route::get('/home', 'HomeController@index')->name('home');
