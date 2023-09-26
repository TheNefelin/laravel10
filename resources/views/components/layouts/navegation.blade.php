<nav class="shadow-lg">
	<div class="flex justify-around">
		<div class="flex items-center flex-shrink-0">
			<a href="{{ route('home') }}">
				<img src="/logo.svg" alt="Logo" class="h-8">
			</a>
		</div>
		<div class="flex gap-4 p-2">
			<a href="{{ route('home') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ true ? 'text-sky-600' : 'text-slate-400' }}">
				Inicio
			</a>
			<a href="{{ route('posts.index') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ false ? 'text-sky-600' : 'text-slate-400' }}">
				Blog
			</a>
			<a href="#" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ false ? 'text-sky-600' : 'text-slate-400' }}">
				Gestionar
			</a>
		</div>
		<div class="flex p-2">
			<a href="#" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ false ? 'text-sky-600' : 'text-slate-400' }}">
				Salir
			</a>
		</div>
	</div>
</nav>

<nav>
  <ul>
    <li><a href="#">Solicitar Viaje</a></li>
    <li><a href="#">Iniciar Viaje</a></li>
    <li><a href="#">Seguimiento de Viaje</a></li>
    <li><a href="#">Calcular Operación</a></li>
    <li><a href="#">Gestionar Vehiculos</a></li>
    <li><a href="#">Gestionar Viajes</a></li>
    <li><a href="#">Gestionar Usuarios</a></li>
  </ul>
</nav>