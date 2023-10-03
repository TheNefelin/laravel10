<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;

class RegisteredUserController extends Controller
{
  public function store(Request $request) {
    $request->validate([
      "name" => ["required", "string", "max:100"],
      "surname" => ["required", "string", "max:100"],
      "email" => ["required", "string", "email", "max:255", "unique:users"],
      "password" => ["required", "confirmed", Rules\Password::default()],
    ]);

    // confirmed obliga a comparar la pasword con la pasword_confirmation

    User::create([
      "name" => $request->name,
      "surname" => $request->surname,
      "email" => $request->email,
      "password" => bcrypt($request->password),
    ]);

    return to_route("login")->with("status", "La Cuenta ha Sido Registrada Correctamente");
  }
}
