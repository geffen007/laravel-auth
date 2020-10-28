<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        // return view('layouts.partials.aside', compact('users'));
        return response()->json($users);
    }

    public function show($id){
        $user = User::where('id', $id)->first();
        $users = User::all();
        return view('users.show', compact('user', 'users'));
    }
}
