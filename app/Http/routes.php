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
    return redirect('post');
});

Route::auth();

/*
 * Routes for the public profile
 */
Route::get('post', 'PublicController@index');
Route::get('post/{filter}', 'PublicController@index');
Route::get('post/{id}/{slug}', 'PublicController@show');

/*
 * Routes for the admin profile
 */
Route::get('admin/posts/search/{filter}', 'PostController@index');
Route::get('admin/tags/search/{filter}', 'TagController@index');

Route::resource('admin/posts', 'PostController');
Route::resource('admin/tags', 'TagController');


