<?php

// Image upload Route
Route::post('/upload/image', ['uses' => 'ImageController@uploadImage', 'as' => 'upload.image']);
Route::delete('/delete/file', ['uses' => 'FileController@deleteFile', 'as' => 'delete.file']);
Route::post('/upload/file', ['uses' => 'FileController@uploadFile', 'as' => 'upload.file']);

// admin routes
Route::get('/', 'AdminController@index')->name('dashboard');
Route::get('/all-users', 'UserController@index')->name('adminUsers');
Route::get('/profile', 'UserController@profile')->name('profile');

Route::get('/categories', 'CategoryController@index')->name('admin.categories');

/**
 * admin resource
 */
Route::resource('post', 'PostController', ['except' => ['show', 'index']]);
Route::resource('category', 'CategoryController', ['except' => ['index', 'show']]);
Route::resource('tag', 'TagController', ['except' => ['index', 'show', 'create']]);
// Route::resource('page', 'PageController', ['except' => ['show', 'index']]);

/**
 * Slugs Routes
 */
Route::get('/post/v1/slug', 'PostController@slug')->name('postSlug');
Route::get('/category/v1/slug', 'CategoryController@slug')->name('categorySlug');

