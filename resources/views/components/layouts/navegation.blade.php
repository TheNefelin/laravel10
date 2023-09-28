<nav class="shadow-lg bg-white">
	<div class="flex justify-around">
		<div class="flex items-center flex-shrink-0">
			<a href="{{ route('home') }}">
				<img src="/logo.png" alt="Logo" class="h-8 w-auto">
			</a>
		</div>
		<div class="flex gap-4 p-4">
			<a href="{{ route('register') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('register') ? 'text-sky-600' : 'text-slate-400' }}">
				Registrar
			</a>
			<a href="{{ route('posts.index') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('posts.*') ? 'text-sky-600' : 'text-slate-400' }}">
				Blog
			</a>
			<a href="{{ route('viajes') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('viajes') ? 'text-sky-600' : 'text-slate-400' }}">
				Viajes
			</a>
		</div>
		<div class="flex p-4">

      @auth
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button 
          class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 text-slate-400"          
          type="submit"
        >Cerrar Sesión</button>
      </form>

      <span>{{ Auth::user()->name }}</span>
      @else
      <a href="{{ route('login') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('login') ? 'text-sky-600' : 'text-slate-400' }}">
				Iniciar Sesión
			</a>
      @endauth

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