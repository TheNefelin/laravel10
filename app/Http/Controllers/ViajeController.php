<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveViajeRequest;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
  public function index(){
    return "index";
  }

  public function show(Viaje $viaje) {
    return $viaje;
  }

  public function create(SaveViajeRequest $request) {
    return view("viajes.index", ["post" => new Viaje]);
  }

  public function store(){
    return "RequestSave";
  }

  public function edit(Viaje $viaje) {
    return $viaje;
  }

  public function update(SaveViajeRequest $request, Viaje $post) {
    return $post;
  }

  public function destroy(Viaje $post) {
    return $post;
  }
}
