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




Route::prefix('user')->middleware('auth')->group(function(){

Route::get('/post/create', 'PostsAddController@create')->name('post.add');
Route::post('/post/create', 'PostsAddController@store')->name('post.store');

});

Route::get('/',"PostsAddController@home")->name('homepage');
Route::get('/post','PostsAddController@index')->name('Post.list');
Route::get('/posts/{id}','PostsAddController@show')->name('Post.detail');

Auth::routes();
