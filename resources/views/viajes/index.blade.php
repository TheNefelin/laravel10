<x-layouts.app title="Blog" meta_description="Meta Viaje Index">

  <h1 class="my-4 font-bold text-3xl text-center text-sky-600">Viajes</h1>

  <div class="flex justify-end px-4">
    @auth
    <a
      class="bg-sky-600 hover:bg-sky-700 text-white inline-flex py-2 px-4 rounded-md uppercase shadow-xl" 
      href="{{ route('posts.create') }}">
      &#x271a; Solicitar Viaje
    </a>
    @endauth
  </div>

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      @include("components.clients")

    </div>
  </div>

</x-layouts.app>
