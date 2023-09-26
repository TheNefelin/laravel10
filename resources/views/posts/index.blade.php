<x-layouts.app title="Blog" meta_description="Meta Blog Index">

	<h1>BLOGS</h1>
	@dump($posts->toArray())

  <a href="{{ route('posts.create') }}">Create new Post</a>

	<ul>
		@foreach ($posts as $post)
			<li key={{ $post->id }}>
				<a 
          href="{{ route('posts.show', $post) }}"> 
          {{ $post->nombre }} 
        </a>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>
        <form action="{{ route("posts.destroy", $post) }}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit">Delete</button>
        </form>
			</li>
		@endforeach
	</ul>

</x-layouts.app>
