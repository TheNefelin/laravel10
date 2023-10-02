<x-layouts.app title="Blog" meta_description="Meta Viaje Index">

  @include("components.h1", ['txt' => "Viajes"])
  @include("components.btn_create", ["txt" => "Solicitar Viaje", "ruta" => "viajes.create"])
  {{-- @dump($viajes->toArray()) --}}

	<ul class="grid m-4 gap-4">
    @foreach ($viajes as $viaje)
      <li class="bg-white shadow-lg rounded-md">
        <a 
          class="flex p-4"
          href="{{ route('viajes.show', $viaje) }}"
        > 
          <ul>
            <li class="flex justify-between gap-x-6 py-5">
              <div class="flex min-w-0 gap-x-4">
                <iframe 
                  src="https://maps.google.com/maps?q=-33.036,-71.62963&output=embed" 
                  frameborder="0"
                  class="h-24 w-32 flex-none bg-gray-50"
                ></iframe>
                {{-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> --}}
                <div class="min-w-0 flex-auto">
                  <p class="text-sm font-semibold leading-6 text-gray-900">Cliente</p>
                  <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $viaje->conductor }}</p>
                </div>
              </div>
              <div class="hidden shrink-0 sm:flex sm:flex-col">
                <p class="text-sm leading-6 text-gray-900">Inicio-Destino</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">{{ $viaje->dir_partida }}</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">{{ $viaje->dir_destino }}</p>
              </div>
              <div class="hidden shrink-0 sm:flex sm:flex-col">
                <p class="text-sm leading-6 text-gray-900">Fecha Ini-Fin</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">{{ $viaje->fecha_ini }}</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">{{ $viaje->fecha_fin }}</p>
              </div>
            </li>
          </ul>
        </a>

        {{-- @auth --}}
        <div class="flex p-4 justify-between items-center">
          <a href="#" class="uppercase text-sm font-semibold text-sky-600">Editar</a>
  
          <form action="{{ route('viajes.destroy', $viaje) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="uppercase text-sm font-semibold text-red-600">Eliminar</button>
          </form>
        </div>
        {{-- @endauth --}}
      </li>
    @endforeach
	</ul>

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      @include("components.clients")

    </div>
  </div>

</x-layouts.app>
