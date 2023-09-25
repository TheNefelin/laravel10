<x-layouts.app title="Maps" meta_description="Meta Maps">

	<h1>MAPAS</h1>
	@dump($posts)

	<ul>
		@foreach ($posts as $post)
			<li key={{ $post->id }}>
				<a 
          href="{{ route('posts.show', $post->id) }}"> 
          {{ $post->nombre }} 
        </a>
			</li>
		@endforeach
	</ul>

</x-layouts.app>
