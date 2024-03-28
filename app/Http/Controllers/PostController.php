<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Posts',
            'posts' => Post::all(),
        ]);
    }
    public function show($slug)
    {
        $selected_post = Post::find($slug);
        return view('post', [
            'title' => $selected_post['judul'],
            'post' => $selected_post,
        ]);
    }
}
