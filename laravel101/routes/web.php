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

Route::get('/','PostsController@showPosts');

Route::get('/hello', function () {
    return view('hello');
});



Route::get('/post','PostsController@show');
Route::get('/deletePost','PostsController@delete');



Route::get('/add','PostsController@insertPost');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
