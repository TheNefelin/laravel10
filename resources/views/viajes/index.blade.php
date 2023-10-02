<x-layouts.app title="Blog" meta_description="Meta Viaje Index">

  @include("components.h1", ['txt' => "Viajes"])
  @include("components.btn_post", ["txt" => "Solicitar Viaje", "ruta" => "viajes.create"])


  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      @include("components.clients")

    </div>
  </div>

</x-layouts.app>
