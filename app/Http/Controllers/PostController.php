<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

  public function index()
  {
    
    $posts = DB::table("post")->get();

    return view("maps", ["posts" => $posts]);
  }
}