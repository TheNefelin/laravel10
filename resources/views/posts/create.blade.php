<x-layouts.app title="Blog" meta_description="Meta Blog Create">

  <h1>CREATE</h1>

  <form action="{{ route('post.store') }}" method="POST">
    @csrf
    <label for="nombre">
      Nombre <br>
      <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
      @error("nombre")
        <br>
        <small style="color: red">{{ $message }}</small>
      @enderror
    </label>
    <br>
    <label for="apellido">
      Apellido <br>
      <input type="text" name="apellido" id="apellido" value="{{ old('apellido') }}">
      @error("apellido")
        <br>
        <small style="color: red">{{ $message }}</small>
      @enderror
    </label>
    <br>
    <input type="submit" value="Enviar">
  </form>

  <a href="{{ route('posts.index') }}">Regresar</a>
</x-layouts.app>