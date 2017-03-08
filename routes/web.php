<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->middleware('protected');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/books', 'BookController@index');
Route::get('/books/{id}', 'BookController@showReviews');
