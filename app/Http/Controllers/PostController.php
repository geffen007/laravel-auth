<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $users = User::all();
        return view('guests.index', compact('posts', 'users'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->first();
        return view('guests.show', compact('post'));
    }
}
