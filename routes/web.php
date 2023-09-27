<?php

use App\Http\Controllers\AuthSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/", "welcome")->name("home");

// Route::get("/blog", [PostController::class, "index"])->name("posts.index");
// Route::get("/blog/create", [PostController::class, "create"])->name("posts.create");
// Route::post("/blog", [PostController::class, "store"])->name("posts.store");
// Route::get("/blog/{post}", [PostController::class, "show"])->name("posts.show");
// Route::get("/blog/{post}/edit", [PostController::class, "edit"])->name("posts.edit");
// Route::patch("/blog/{post}", [PostController::class, "update"])->name("posts.update");
// Route::delete("/blog/{post}", [PostController::class, "destroy"])->name("posts.destroy");

// Route::resource("posts", PostController::class);

Route::resource("blog", PostController::class, [
  "names" => "posts",
  "parameters" => ["blog" => "post"],
]);

Route::view("/viajes", "viajes.index")->name("viajes.index")->middleware("viajes");

Route::view("/usuarios", "usuarios.index")->name("usuarios");


Route::view("/login", "auth.login")->name("login");
Route::post("/login", [AuthSessionController::class, "store"]);
Route::post("/logout", [AuthSessionController::class, "destroy"])->name("logout");

Route::view("/register", "auth.register")->name("register");
Route::post("/register", [RegisteredUserController::class, "store"])->name("register");