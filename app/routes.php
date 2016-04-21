<?php


Route::get('/', 'HomeController@showWelcome');
Route::get('login', 'UsersController@loginAttempt');
Route::get('/login', 'UsersController@login');