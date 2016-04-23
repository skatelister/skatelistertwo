<?php

// Home Route
Route::get('/', 'MainController@home');

// Users Resource
Route::resource('/users', 'UsersController');

// Posts Resource
Route::resource('/posts', 'PostsController');

// Login Methods
Route::get('/login', 'UsersController@login');
Route::post('/login', 'UsersController@loginAttempt');

