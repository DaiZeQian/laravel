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
