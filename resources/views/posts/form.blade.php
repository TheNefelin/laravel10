<label for="nombre">
  Nombre <br>
  <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $post->nombre) }}">
  @error("nombre")
    <br>
    <small style="color: red">{{ $message }}</small>
  @enderror
</label>
<br>
<label for="apellido">
  Apellido <br>
  <input type="text" name="apellido" id="apellido" value="{{ old('apellido', $post->apellido) }}">
  @error("apellido")
    <br>
    <small style="color: red">{{ $message }}</small>
  @enderror
</label>