<x-layouts.app title="Blog" meta_description="Meta Blog Index">

  <h1 class="my-4 font-bold text-3xl text-center text-sky-600">Solicitar Viaje</h1>
	{{-- @dump($posts->toArray()) --}}

  <div class="flex justify-end px-4">
    @auth
    <a
      class="bg-sky-600 hover:bg-sky-700 text-white inline-flex py-2 px-4 rounded-md uppercase shadow-xl" 
      href="{{ route('posts.create') }}">
      &#x271a; Nuevo Viaje
    </a>
    @endauth
  </div>

	<ul class="grid m-4 gap-4">
		@foreach ($posts as $post)
			<li class="bg-white shadow-lg rounded-md">
				<a 
          class="flex p-4"
          href="{{ route('posts.show', $post) }}"> 
          {{ $post->nombre }} 
        </a>

        @auth
        <div class="flex p-4 justify-between items-center">
          <a href="{{ route('posts.edit', $post) }}" class="uppercase text-sm font-semibold text-sky-600">Editar</a>

          <form action="{{ route("posts.destroy", $post) }}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="uppercase text-sm font-semibold text-red-600">Eliminar</button>
          </form>
        </div>
        @endauth
			</li>
		@endforeach
	</ul>

</x-layouts.app>
