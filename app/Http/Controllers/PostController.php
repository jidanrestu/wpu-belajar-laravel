<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'All Posts',
            'posts' => Post::with(['author', 'category'])->latest()->get(),
        ]);
    }
    public function show(Post $post)
    {
        $selected_post = Post::find($post->id);
        return view('post', [
            'title' => $selected_post['judul'],
            'post' => $selected_post,
        ]);
    }
}
