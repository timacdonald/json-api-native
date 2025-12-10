<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController
{
    public function index()
    {
        $posts = Post::all();

        return $posts->toResourceCollection();
    }

    public function show(Post $post)
    {
        return $post->toResource();
    }
}
