<x-layouts.app title="Home" meta_description="Meta Home">

  @include("components.h1", ['txt' => "Iniciar Sesión"])

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf

        @include("components.input", ["id" => "email", "type" => "email", "txt" => "Correo"])
        @include("components.input", ["id" => "password", "type" => "password", "txt" => "Contraseña"])
  
        @error('failed')
        <small class=" text-red-600">{{ $message }}</small>
        @enderror
  
        <div class="text-sm flex justify-between">
          <div class="text-sm font-semibold text-sky-600 hover:text-sky-500">
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Recordar</label>
          </div>        
          <div>
            <a href="#" 
            class="flex justify-between text-sm font-semibold text-sky-600 hover:text-sky-500"
              >Recuperar Contraseña?
            </a>
          </div>
        </div>

        @include("components.btn_submit", ["txt" => "Iniciar Sesión"])
      </form>

    </div> 
  </div> 

</x-layouts.app>


