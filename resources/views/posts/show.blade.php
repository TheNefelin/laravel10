<x-layouts.app title="Maps" meta_description="Meta Show">

    <h1>{{ $post->nombre }}</h1>

    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
