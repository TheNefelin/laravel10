<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      // $posts = Post::get();
      $posts = Post::get();
    
      return view("maps", ["posts" => $posts]);
    }
}
