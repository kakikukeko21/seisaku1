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

Auth::routes();
Route::group(['middleware' => ['auth']], function (){
    Route::get('/posts/bihin', 'PostController@bihin');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    Route::post('/posts', 'PostController@store');
    Route::delete('/posts/{post}', 'PostController@delete');
    Route::get('/posts/{post}', 'PostController@show');
    Route::get('/', 'PostController@index');

    Route::get('/names/shimei', 'NameController@shimei');
    Route::post('/names', 'NameController@store');
    Route::get('/names/{name}', 'NameController@nameshow');
    Route::get('/name', 'NameController@index');
    
    Route::get('/comments/comment', 'CommentController@comment');
    Route::post('/comments', 'CommentController@store');
    Route::get('/comments/{comment}', 'CommentController@commentshow');
    Route::get('/comment', 'CommentController@index');
    Route::delete('/comments/{comment}', 'CommentController@delete');
});
