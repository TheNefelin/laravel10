<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveViajeRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return false;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      "id_cliente" => ["required", "integer"],
      "id_conductor" => ["required", "integer"],
      "fecha_ini" => ["required", "date"],
      "fecha_fin" => ["date"],
      "punto_partida" => ["required", "string"],
      "punto_llegada" => ["string"],
      "punto_inicio" => ["string"],
    ];
  }
}
