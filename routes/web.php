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
/**
 * 路由参数: 路径 回调函数
 */
Route::get('/', function () {
    return view('welcome');
});
//控制器一定要带上命名空间
//Route::get('/','[控制器]@[行为]');
//文章列表页面
Route::get('/posts','\App\Http\Controllers\PostController@index');
//文章详情
Route::get('/posts/{post}','\App\Http\Controllers\PostController@show');
//创建文章
Route::get('/posts/create','\App\Http\Controllers\PostController@create');
Route::post('/posts','\App\Http\Controllers\PostController@store');
//编辑文章

Route::get('/posts/{posts}/edit','\App\Http\Controllers\PostController@edit');
Route::put('/posts/{posts}','\App\Http\Controllers\PostController@update');
//删除文章
Route::get('/posts/delete','\App\Http\Controllers\PostController@delete');
