<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController
{
    public function index()
    {
        $comments = Comment::all();

        return $comments->toResourceCollection();
    }

    public function show(Comment $comment)
    {
        return $comment->toResource();
    }
}
