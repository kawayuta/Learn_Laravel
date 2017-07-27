<?php

Route::resource('articles', 'ArticlesController');
Route::get('/', 'ArticlesController@index');

