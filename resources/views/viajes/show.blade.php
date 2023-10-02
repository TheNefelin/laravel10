<x-layouts.app title="Blog" meta_description="Meta Blog Show">

  @include("components.h1", ["txt" => "Detalle del Viaje"])

  <p>{{ $viaje->conductor }}</p>
  <p>{{ $viaje->dir_destino }}</p>
  <p>{{ $viaje->dir_partida }}</p>
  <p>{{ $viaje->fecha_ini }}</p>
  <p>{{ $viaje->fecha_fin }}</p>

  @include("components.link", ["route" => "viajes.index", "txt" => "Regresar"])

</x-layouts.app>
