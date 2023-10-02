<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
  use HasFactory;
  protected $fillable = [
    "conductor",
    "fecha_ini",
    "fecha_fin",
    "dir_partida",
    "dir_destino"
  ];
}
