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

Route::get('/', 'PostController@index');
Route::get('/search', 'PostController@search');
Route::get('/shows/{title}', 'PostController@show');
Route::get('/posts/{post}','PostController@detail');

Route::group(['middleware' => ['auth']], function(){
Route::post('/posts', 'PostController@store');
Route::resource('messages', 'MessageController', ['only' => ['store']]);
Route::get('/create/{title}', 'PostController@create');
Route::get('/posts/like/{id}', 'PostController@like')->name('post.like');
Route::get('/posts/unlike/{id}', 'PostController@unlike')->name('post.unlike');
Route::put('/posts/{post}', 'PostController@update');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}/edit', 'PostController@edit');
});

Auth::routes();

Route::get('/mypage', 'HomeController@index')->name('mypage');
Route::get('/not_login_mypage', 'HomeController@index')->name('not_login_mypage');

Route::get('/user', 'UserController@index');