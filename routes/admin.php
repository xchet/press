<?php

// admin routes

Route::get('/', 'AdminController@index')->name('dashboard');
Route::get('/all-users', 'UserController@index')->name('adminUsers');
Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/categories', 'CategoryController@index')->name('admin.categories');

/**
 * admin resource
 */
Route::resource('post', 'PostController', ['except' => ['show', 'index']]);
Route::resource('category', 'CategoryController', ['except' => ['index', 'show', 'create']]);
Route::resource('tag', 'TagController', ['except' => ['index', 'show', 'create']]);
// Route::resource('page', 'PageController', ['except' => ['show', 'index']]);

/**
 * Post Routes
 */
Route::get('/post/v1/slug', 'PostController@slug')->name('postSlug');
