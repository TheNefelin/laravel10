<x-layouts.app title="Blog" meta_description="Meta Viaje Create">

  @include("components.h1", ['txt' => "Solicitar Viajes"])

  <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        {{-- @include("components.input_form", ["txt" => "Nombre", "type" => "text", "id" => "name"])
        @include("components.input_form", ["txt" => "Apellido", "type" => "text", "id" => "surname"])
        @include("components.input_form", ["txt" => "Correo", "type" => "email", "id" => "email"])
        @include("components.input_form", ["txt" => "Contraseña", "type" => "password", "id" => "password"])
        @include("components.input_form", ["txt" => "Confirmar Contraseña", "type" => "password", "id" => "password_confirmation"])
        @include("components.btn_submit", ["txt" => "Solicitar Viaje"]) --}}

        @include("components.input_form", ["txt" => "Conductor", "type" => "text", "id" => "name"])
        @include("components.input_form", ["txt" => "Fecha Inicio", "type" => "datetime-local", "id" => "date_ini"])
        @include("components.input_form", ["txt" => "Direccion de Partida", "type" => "text", "id" => "dir_partida"])
        @include("components.input_form", ["txt" => "Direccion de Destino", "type" => "text", "id" => "dir_destino"])

        @include("components.btn_submit", ["txt" => "Solicitar Viaje"])
        @include("components.link", ["txt" => "Regresar", "route" => "viajes"])
      </a>

    </div>
  </div>
  
</x-layouts.app>
