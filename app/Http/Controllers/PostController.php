<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //文章列表页面
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(6);
        return view('post.index',compact('posts'));
    }

    //详情页面
    public function show()
    {
        return view('post.show');
    }

    //创建页面
    public function create()
    {
        return view('post.create');
    }

    //创建逻辑
    public function store()
    {
        return 123;
    }

    //编辑页面
    public function edit()
    {
        return view('post.edit');
    }

    //编辑逻辑
    public function update()
    {
        return 123;
    }

    //删除逻辑
    public function delete()
    {
        return 123;
    }
}
