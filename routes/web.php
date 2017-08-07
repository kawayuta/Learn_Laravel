<?php

Auth::routes();
Route::resource('articles', 'ArticlesController');

Route::get('/', 'HomeController@index')->name('home');
Route::get('/new', 'ArticlesController@create');
Route::get('/events', 'ArticlesController@index');
Route::get('/events/{id}', 'ArticlesController@show');
Route::get('/events/{id}/destroy', 'ArticlesController@destroy');

Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');