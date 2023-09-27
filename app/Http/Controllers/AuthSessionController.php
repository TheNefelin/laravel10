<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthSessionController extends Controller
{
  public function store(Request $request) {
    // se obtiene el estado del checkbox
    // dd($request->boolean("remember"));

    $creadentials = $request->validate([
      "email" => ["required", "string", "email"],
      "password" => ["required", "string", "min:2"]
    ]);

    if (!Auth::attempt($creadentials, $request->boolean("remember"))) {
      throw ValidationException::withMessages([
        "email" => __("auth.failded")
      ]);
    }

    $request->session()->regenerate();

    //redericiona si esta autenticado a la pagina que queria ver
    return redirect()->intended()->with("status", "Te haz logeado correctamente");
  }

  public function destroy(Request $request) {
    Auth::guard("web")->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return to_route("login")->with("status", "Sesión Cerrada Correctamente");
  }
}
