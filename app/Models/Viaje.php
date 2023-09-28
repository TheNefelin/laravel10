<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
  use HasFactory;
  protected $fillable = [
    "id_cliente", 
    "id_conductor",
    "fecha_ini", 
    "fecha_fin",
    "punto_partida", 
    "punto_llegada",
    "punto_inicio"
  ];
}
