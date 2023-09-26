<x-layouts.app title="Blog" meta_description="Meta Blog Index">

	<h1>BLOGS</h1>
	@dump($posts)

  <a href="{{ route('posts.create') }}">Create new Post</a>

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
