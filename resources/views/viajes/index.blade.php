<x-layouts.app title="Blog" meta_description="Meta Viaje Index">
  {{-- @dump($viajes->toArray()) --}}

  @include("components.h1", ['txt' => "Viajes"])

  {{-- @auth --}}
    @include("components.btn_create", ["txt" => "Solicitar Viaje", "ruta" => "viajes.create"])  
  {{-- @endauth --}}

  @include("viajes.form")

</x-layouts.app>
