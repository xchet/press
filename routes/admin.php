<?php

// admin routes

Route::get('/', 'AdminController@index')->name('dashboard');
Route::get('all-users', 'UserController@index')->name('adminUsers');
Route::get('profile', 'UserController@profile')->name('profile');
