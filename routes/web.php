<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});
Route::get('/following', function () {
    return view('pages.following');
});
Route::get('/followers', function () {
    return view('pages.followers');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home/{content}/tweet', 'TweetController@store')->name('tweet.store');

Route::get('/edit', 'UserController@edit')->name('upload.edit');
Route::get('/upload', 'UserController@create')->name('upload.create');
Route::post('/upload', 'UserController@store')->name('upload.store');