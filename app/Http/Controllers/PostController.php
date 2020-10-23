<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('guests.index', compact('posts'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();

        return view('guests.show', compact('post'));
    }
}
