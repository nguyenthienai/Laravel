<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(5);
    	return view ('index', compact('posts'));
    }

    public function create()
    {
    	return view ('create');
    }

    public function docreate()
    {
    	$filename = Request('img')->getClientOriginalName();
    	$attribute = request()->all();
    	$attribute['img'] = $filename;
        Post::create($attribute);
        Request('img')->move('images',$filename);
        Session::flash('success', 'Tạo mới thành công !');
    	return back();
    }

    public function edit(Post $post)
    {
    	return view ('edit', compact('post'));
    }

     public function store(Post $post)
    {
    	$filename = Request('img')->getClientOriginalName();
    	$attribute = request()->all();
    	$attribute['img'] = $filename;
        $post->update($attribute);
    	Request('img')->move('images/',$filename);
    	Session::flash('success', 'Sửa bài viết thành công !');
    	return redirect (route('home'));
    }

    public function delete(Post $post)
    {
    	$post->delete();
    	Session::flash('success', 'Xóa bài viết thành công !');
    	return back();
    }

     public function detail(Post $post)
    {
        return view ('postdetail',compact('post'));
    }
}

