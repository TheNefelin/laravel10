<x-layouts.app title="Blog" meta_description="Meta Blog Show">

    <h1>{{ $post->nombre }}</h1>

    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
