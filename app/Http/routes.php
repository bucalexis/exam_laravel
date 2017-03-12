<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('admin.home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('admin/posts/search/{filter}', 'PostController@index');
Route::get('admin/posts/{id}/{slug}', 'PostController@show');
Route::resource('admin/posts', 'PostController');

