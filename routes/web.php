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

Route::get('/posts/bihin', 'PostController@bihin');
Route::get('/posts/shimei', 'PostController@shimei');
Route::get('/posts/commentcreate', 'PostController@commentcreate');
Route::get('/categories/{category}', 'CategoryController@index');
Route::get('/posts/{post}/edit', 'PostController@edit');
Route::put('/posts/{post}', 'PostController@update');
Route::post('/posts', 'PostController@store');
Route::delete('/posts/{post}', 'PostController@delete');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/', 'PostController@index');
