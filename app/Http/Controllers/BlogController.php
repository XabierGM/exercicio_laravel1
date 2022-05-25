<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('blog', compact('posts'));
    }

    public function show(Post $post)
    {
        $posts = Post::get();
        return view('post', compact('post'));
    }
}

