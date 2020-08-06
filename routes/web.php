<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('berita/{slug}', 'FrontendController@show')->name('frontend.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'DashboardController')->name('admin.dashboard');

    Route::resource('post', 'PostController');
});

