<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showProfile()
    { /*   dd($userID = auth()->user()->id); */

        $userID = auth()->user()->id;


        $dataUser = User::with('profile', 'Posts')->find($userID);
           /*   dd($dataUser); */

        //Data Post user 

       /*  $postsUser = Post::find('user_id',  $userID);
        dd($postsUser); */


        return view('profileView', compact('dataUser'));
    }
}
