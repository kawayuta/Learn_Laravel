<?php

Route::resource('articles', 'ArticlesController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');