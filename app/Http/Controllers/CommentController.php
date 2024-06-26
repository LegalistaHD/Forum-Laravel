<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'body' => 'required',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = new Comment($request->all());
        $comment->user()->associate(auth()->user());
        $comment->post()->associate($post);
        $comment->save();

        return redirect()->route('posts.show', $post);
    }

}
