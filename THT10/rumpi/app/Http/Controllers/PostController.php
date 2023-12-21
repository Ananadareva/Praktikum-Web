<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;



class PostController extends Controller
{
  public function index()
  {

    /*  User::where */
    $postDatas = Post::orderBy('created_at', 'desc')->with('user', 'files')->paginate(5);


    /*  foreach ($postDatas as $post) {
        // Akses user untuk setiap post
        dd($post->user->name);
    } */

    return view('home', compact('postDatas'));
  }

  public function showComment($id)
  {
    $post = Post::find($id);
    return view('post', compact('post'));
  }

}
