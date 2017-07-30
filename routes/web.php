<?php

Route::resource('articles', 'ArticlesController');
Route::get('/', 'ArticlesController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
