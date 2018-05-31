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
Route::get('/mensagens', function () {
    return view('pages.dm');
});
Route::get('/notificacoes', function () {
    return view('pages.notificacoes');
});
Route::get('/users', 'UserController@index')->name('user.index');
 
 
Auth::routes();
 
Route::get('/home', 'HomeController@index')->name('home');

Route::delete('/home/{tweet}/delete', 'TweetController@destroy')->name('tweet.delete')->middleware('auth');
Route::post('/home/{content}/tweet', 'TweetController@store')->name('tweet.store');
Route::post('/follow/{user}', 'UserController@follow')->name('user.follow');
Route::post('/unfollow/{user}', 'UserController@unfollow')->name('user.unfollow');
Route::get('/edit', 'UserController@edit')->name('upload.edit');
Route::get('/upload', 'UserController@create')->name('upload.create');
Route::post('/upload', 'UserController@store')->name('upload.store');
Route::get('/{user}', 'UserController@show')->name('user.show');

Route::get('/{user}/followers', 'UserController@followers')->name('user.followers');
Route::get('/{user}/followings', 'UserController@followings')->name('user.followings');


Route::get('/{user}/edit', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::put('/{user}/edit', 'UserController@update')->name('user.update')->middleware('auth');

// Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);