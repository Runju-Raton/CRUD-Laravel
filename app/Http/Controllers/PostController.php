<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function postComment(){
        $posts= Post::with('comment')->get();
        return view('post',compact('posts'));
    }
}
