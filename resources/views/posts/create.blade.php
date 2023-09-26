<x-layouts.app title="Blog" meta_description="Meta Blog Create">

  <h1>Create Form</h1>
  @dump($post->toArray())

  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include("posts.form")

    <br>
    <input type="submit" value="Crear">
  </form>

  <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>