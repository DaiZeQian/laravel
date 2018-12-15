<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //文章列表
    public function index()
    {
        return view('post/index');
    }

    //文章详情页面
    public function show()
    {
        return view('post/show');
    }

    //创建文章
    public function create()
    {
        return view('post/create');
    }

    //创建文章
    public function store()
    {

    }

    //编辑文章
    public function edit()
    {
        return view('post/edit');

    }

    //编辑逻辑
    public function update()
    {

    }

    //删除
    public function delete()
    {

    }
}
