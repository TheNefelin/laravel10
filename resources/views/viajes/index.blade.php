<x-layouts.app title="Blog" meta_description="Meta Viaje Index">
  {{-- @dump($viajes->toArray()) --}}

  @include("components.h1", ['txt' => "Viajes"])

  {{-- @auth --}}
    @include("components.btn_create", ["txt" => "Solicitar Viaje", "ruta" => "viajes.create"])  
  {{-- @endauth --}}

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
          <a href="{{ route('viajes.edit', $viaje) }}" class="uppercase text-sm font-semibold text-sky-600">Editar</a>
  
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

</x-layouts.app>
