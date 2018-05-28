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
Route::get('/sobre', function () {
    return view('pages.sobre');
});
Route::get('/users', 'UserController@index')->name('user.index');
 
 
Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');
 
Route::post('/home/{content}/tweet', 'TweetController@store')->name('tweet.store');
Route::post('/f/{user}', 'UserController@follow')->name('user.follow')->middleware('auth');
Route::post('/u/{user}', 'UserController@unfollow')->name('user.unfollow')->middleware('auth');
Route::get('/edit', 'UserController@edit')->name('upload.edit');
Route::get('/upload', 'UserController@create')->name('upload.create');
Route::post('/upload', 'UserController@store')->name('upload.store');
Route::get('/{user}', 'UserController@show')->name('user.show');

Route::get('/{user}/edit', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::put('/{user}/edit', 'UserController@update')->name('user.update')->middleware('auth');

Route::get('/{user}/followers', 'UserController@followers')->name('user.followers');
Route::get('/{user}/followings', 'UserController@followings')->name('user.followings');