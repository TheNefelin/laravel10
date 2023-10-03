<x-layouts.app title="Home" meta_description="Meta Home">

  @include("components.h1", ['txt' => "Registrar Usuario"])

  <div class="flex min-h-full flex-col justify-center px-6">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
      
        @include("components.input", ["id" => "name", "type" => "text", "txt" => "Nombre", "value" => ""])
        @include("components.input", ["id" => "surname", "type" => "text", "txt" => "Apellido", "value" => ""])
        @include("components.input", ["id" => "email", "type" => "email", "txt" => "Correo", "value" => ""])
        @include("components.input", ["id" => "password", "type" => "password", "txt" => "Contraseña", "value" => ""])
        @include("components.input", ["id" => "password_confirmation", "type" => "password", "txt" => "Confirmar Contraseña", "value" => ""])
      
        <div class="pt-4">
          @include("components.btn_submit", ["txt" => "Crear Usuario"])
        </div>
  
      </form>
    
    </div>
  </div>

</x-layouts.app>