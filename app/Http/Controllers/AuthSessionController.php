<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthSessionController extends Controller
{
  public function store(Request $request) {
    // se obtiene el estado del checkbox
    dd($request->boolean("remember"));

    $creadentials = $request->validate([
      "email" => ["required", "string", "email"],
      "password" => ["required", "string", "min:2"]
    ]);

    if (Auth::attempt($creadentials)) {

    }

    return $creadentials;
  }
}
