<?php


Route::get('/', 'HomeController@showWelcome');
Route::resource('/users', 'UsersController');
Route::get('login', 'UsersController@loginAttempt');
Route::get('/login', 'UsersController@login');