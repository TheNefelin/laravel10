<?php

use App\Http\Controllers\AuthSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ViajeController;
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

// Ruta, ObjDato, ObjClase o View, funcion, nombre
Route::get("/viajes", [ViajeController::class, "index"])->name("viajes.index");
Route::get("/viajes/create", [ViajeController::class, "create"])->name("viajes.create"); 
Route::post("/viajes", [ViajeController::class, "store"])->name("viajes.store");
Route::get("/viajes/{viaje}", [ViajeController::class, "show"])->name("viajes.show");
Route::delete("/viajes/{viaje}", [ViajeController::class, "destroy"])->name("viajes.destroy");

Route::view("/usuarios", "usuarios.index")->name("usuarios");

Route::view("/login", "auth.login")->name("login");
Route::post("/login", [AuthSessionController::class, "store"]);
Route::post("/logout", [AuthSessionController::class, "destroy"])->name("logout");

Route::view("/register", "auth.register")->name("register");
Route::post("/register", [RegisteredUserController::class, "store"])->name("register");

Route::view("/test", "components.test")->name("test");