<?php


Route::get('/', 'MainController@home');
Route::resource('/users', 'UsersController');
Route::resource('/posts', 'PostsController');
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@loginAttempt');
