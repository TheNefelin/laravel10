<x-layouts.app title="Blog" meta_description="Meta Viaje Create">
  {{-- @dump($viaje->toArray()) --}}

  @include("components.h1", ['txt' => "Solicitar Viajes"])

  <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      <form action="{{ route('viajes.update', $viaje) }}" method="POST" class="space-y-4">
        @csrf
        @method("PATCH")

        @include("components.input", ["id" => "conductor", "type" => "text", "txt" => "conductor", "value" =>  $viaje->conductor])
        @include("components.input", ["id" => "fecha_ini", "type" => "datetime-local", "txt" => "Fecha Inicio", "value" =>  $viaje->fecha_ini])
        @include("components.input", ["id" => "fecha_fin", "type" => "datetime-local", "txt" => "Fecha Termino", "value" =>  $viaje->fecha_fin])
        @include("components.input", ["id" => "dir_partida", "type" => "text", "txt" => "Direccion de Partida", "value" =>  $viaje->dir_partida])
        @include("components.input", ["id" => "dir_destino", "type" => "text", "txt" => "Direccion de Destino", "value" =>  $viaje->dir_destino])
        
        @include("components.btn_submit", ["txt" => "Modificar Viaje"])
        @include("components.link", ["txt" => "Regresar", "route" => "viajes.index"])
      </a>

    </div>
  </div>
  
</x-layouts.app>