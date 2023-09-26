<nav class="shadow-lg bg-white">
	<div class="flex justify-around">
		<div class="flex items-center flex-shrink-0">
			<a href="{{ route('home') }}">
				<img src="/logo.png" alt="Logo" class="h-8 w-auto">
			</a>
		</div>
		<div class="flex gap-4 p-4">
			<a href="{{ route('home') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('home') ? 'text-sky-600' : 'text-slate-400' }}">
				Inicio
			</a>
			<a href="{{ route('posts.index') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('posts.*') ? 'text-sky-600' : 'text-slate-400' }}">
				Blog
			</a>
			<a href="{{ route('viajes.index') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ false ? 'text-sky-600' : 'text-slate-400' }}">
				Viajes
			</a>
		</div>
		<div class="flex p-4">
      @auth
      <a href="#" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ false ? 'text-sky-600' : 'text-slate-400' }}">
				Cerrar Sesión
			</a>  
      @endauth
      @guest
      <a href="{{ route('login') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('login') ? 'text-sky-600' : 'text-slate-400' }}">
				Iniciar Sesión
			</a>
      @endguest
		</div>
	</div>
</nav>

{{-- <nav>
  <ul>
    <li><a href="#">Solicitar Viaje</a></li>
    <li><a href="#">Iniciar Viaje</a></li>
    <li><a href="#">Seguimiento de Viaje</a></li>
    <li><a href="#">Calcular Operación</a></li>
    <li><a href="#">Gestionar Vehiculos</a></li>
    <li><a href="#">Gestionar Viajes</a></li>
    <li><a href="#">Gestionar Usuarios</a></li>
  </ul>
</nav> --}}