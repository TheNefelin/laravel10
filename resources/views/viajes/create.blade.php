<x-layouts.app title="Blog" meta_description="Meta Viaje Create">

  @include("components.h1", ['txt' => "Solicitar Viajes"])

  <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      <form action="{{ route('viajes.store') }}" method="POST" class="space-y-4">
        @csrf

        @include("components.input", ["txt" => "Conductor", "type" => "text", "id" => "conductor", "value" => ""])
        @include("components.input", ["txt" => "Fecha Inicio", "type" => "datetime-local", "id" => "fecha_ini", "value" => ""])
        @include("components.input", ["txt" => "Fecha Termino", "type" => "datetime-local", "id" => "fecha_fin", "value" => ""])
        @include("components.input", ["txt" => "Direccion de Partida", "type" => "text", "id" => "dir_partida", "value" => ""])
        @include("components.input", ["txt" => "Direccion de Destino", "type" => "text", "id" => "dir_destino", "value" => ""])
        
        @include("components.btn_submit", ["txt" => "Solicitar Viaje"])
        @include("components.link", ["txt" => "Regresar", "route" => "viajes.index"])
      </a>

    </div>
  </div>
  
</x-layouts.app>
