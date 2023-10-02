<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveViajeRequest;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
  public function __construct()
  {
    // $this->middleware("auth", ["only" => []]);
    // $this->middleware("auth", ["except" => []]);
  }

  public function index(){
    return "index";
  }

  public function show(Viaje $viaje) {
    return $viaje;
  }

  public function create() {
    return view("viajes.create", ["post" => new Viaje]);
  }

  public function store(SaveViajeRequest $request) {
    Viaje::create($request->validated());
    return $request;
    return to_route("viajes.index")->with("status", "Datos Guardado Correctamente");
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
