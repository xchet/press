<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Auth::routes(['register'=>false]);

Route::get('auth/google', 'Auth\ProviderController@redirectToGoogle')->name('googleAuth');
Route::get('auth/google/callback', 'Auth\ProviderController@handleGoogleCallback')->name('googleCallback');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('eg/post/{slug}', 'SiteController@post')->middleware('page-cache'); // e.g add ->middleware('page-cache') to route to cache
