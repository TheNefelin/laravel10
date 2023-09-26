<?php

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


Route::get("/blog", [PostController::class, "index"])->name("posts.index");
Route::get("/blog/create", [PostController::class, "create"])->name("posts.create");
Route::post("/blog", [PostController::class, "store"])->name("post.store");
Route::get("/blog/{post}", [PostController::class, "show"])->name("posts.show");
