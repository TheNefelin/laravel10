<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveViajeRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      "conductor" => ["required", "string"],
      "fecha_ini" => ["required", "date"],
      "fecha_fin" => ["date"],
      "dir_partida" => ["required", "string"],
      "dir_destino" => ["required", "string"],
    ];
  }
}
