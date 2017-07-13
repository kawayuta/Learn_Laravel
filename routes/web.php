<?php

Route::resource('articles', 'Article');
Route::get('/', 'Article@index');
