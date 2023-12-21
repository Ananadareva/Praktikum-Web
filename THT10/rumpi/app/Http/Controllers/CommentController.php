<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function showComment($id)
    {
        $post = Post::find($id);
        $postComments = $post->comments()->with('user')->orderBy('created_at', 'desc')->paginate(5);
     //   dd($postComments);
        return view('commentView', compact('postComments', 'post'));
    }
}
