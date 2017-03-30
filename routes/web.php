<?php

Route::get('/', 'VideosController@index');
Route::get('/videos', 'VideosController@index');
Route::get('/videos/{video}', 'VideosController@show');
