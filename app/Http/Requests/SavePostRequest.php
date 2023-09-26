<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
{
  public function authorize(): bool
  {
    return true;
  }

  public function rules(): array
  {
    return [
      "nombre" => ["required", "min:2"],
      "apellido" => ["required", "min:2"],
    ];
  }
}
