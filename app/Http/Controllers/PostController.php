<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index(){
    $posts = Post::get();
    return view("posts.index", ["posts" => $posts]);
  }

  public function show(Post $post){
    return  view("posts.show", ["post" => $post]);
  }

  // Form crear
  public function create() {
    return view("posts.create", ["post" => new Post]);
  }

  public function store(SavePostRequest $request) {
    // SavePostRequest manda los datos del Form a Validacion en el archivo Request
    // Instancia nueva para insert segun la Clase Post
    Post::create($request->validated());

    // Retorna a la vista Index de Post retornando un mensaje
    return to_route("posts.index")->with("status", "Datos Guardado Correctamente");
  }

  // Form Modificar
  public function edit(Post $post){
    return  view("posts.edit", ["post" => $post]);
  }

  public function update(SavePostRequest $request, Post $post) {
    // SavePostRequest manda los datos del Form a Validacion en el archivo Request
    // Modifica los datos
    $post->update($request->validated());

    // Retorna a la vista Show de Post retornando un mensaje
    return to_route("posts.show", $post)->with("status", "Datos Modificados Correctamente");
  }

  public function destroy(Post $post){
    // Elimina el post solicitado
    $post->delete();

    // Retorna a la vista Show de Post retornando un mensaje
    return to_route("posts.index")->with("status", "Datos Eliminados Correctamente");
  }
}

