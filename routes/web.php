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

//文章列表页
Route::get('/posts','PostController@index');
//创建文章
Route::get('/posts/create','PostController@create');
Route::post('/posts','PostController@store');
//文章详情页
Route::get('/posts/{post}','PostController@show');
//编辑文章
Route::get('/posts/{post}/edit','PostController@edit');
Route::post('/posts/{post}','PostController@update');
//删除文章
Route::get('/posts/delete','PostController@delete');
//图片上传
Route::post('/posts/image/upload','PostController@imageUpload');
