<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveViajeRequest;
use App\Models\Viaje;
use Illuminate\Http\Request;

class ViajeController extends Controller
{
  public function __construct(){
    $this->middleware("auth", ["only" => []]);
    // $this->middleware("auth", ["except" => []]);
  }

  public function index(){
    $viajes = Viaje::get();
    return view("viajes.index", ["viajes" => $viajes]);
  }

  public function show(Viaje $viaje) {
    return  view("viajes.show", ["viaje" => $viaje]);
  }

  public function create() {
    return view("viajes.create", ["viaje" => new Viaje]);
  }

  public function store(SaveViajeRequest $request) {
    Viaje::create($request->validated());

    return to_route("viajes.index")->with("status", "Datos Guardado Correctamente");
  }

  public function edit(Viaje $viaje) {
    return  view("viajes.edit", ["viaje" => $viaje]);
  }

  public function update(SaveViajeRequest $request, Viaje $viaje) {
    return $viaje;
  }

  public function destroy(Viaje $viaje) {
    $viaje->delete();
    return to_route("viajes.index")->with("status", "Datos Eliminados Correctamente");
  }
}
