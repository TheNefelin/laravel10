<x-layouts.app title="Blog" meta_description="Meta Blog Show">

  <h1>Edit Form</h1>
  @dump($post->toArray())

   <form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf @method("PATCH")
    @include("posts.form")

    <br>
    <input type="submit" value="Modificar">
  </form>

  <a href="{{ route('posts.index') }}">Regresar</a>

</x-layouts.app>
