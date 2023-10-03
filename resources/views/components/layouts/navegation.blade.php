<nav class="shadow-lg bg-white">
  <div class="flex items-center justify-between p-4">
    <div class="flex items-center gap-4">
      <a href="{{ route('home') }}">
        <img src="/logo.png" alt="Logo" class="h-8 w-auto">
      </a>
  
      @auth
        <h1 class="text-sky-700 font-bold">{{ Auth::user()->name }}</h1>
      @endauth
    </div>

    <span class="flex flex-shrink-0 gap-4">
      @auth
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button 
          class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 text-slate-400"          
          type="submit"
        >Cerrar Sesión</button>
      </form>

      @else
      <a href="{{ route('login') }}" class="px-3 py-2 text-base font-medium rounded-md hover:text-white hover:bg-slate-400 {{ request()->routeIs('login') ? 'text-sky-600' : 'text-slate-400' }}">
        Iniciar Sesión
      </a>
      @endauth

      <button
        onclick="handleBurgerClick()"
        class="inline-flex items-center justify-center w-10 h-10 ml-auto bg-sky-700 hover:bg-sky-600 text-white border rounded-md outline-none focus:outline-none"
        >
        <svg
          class="w-6 h-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M4 6h16M4 12h16M4 18h16"
          />
        </svg>
      </button>
    </span>
  </div>    

  <div id="menu" class="bg-sky-700 text-white w-full px-8 py-4 hidden">
    <ul>
      <li class="flex font-medium rounded-md hover:bg-sky-600">
        <a href="{{ route('register') }}" class="w-full px-4 py-2 ">
          Registrar
        </a>
      </li>
      <li class="flex font-medium rounded-md hover:bg-sky-600">
        <a href="{{ route('posts.index') }}" class="w-full px-4 py-2">
          Blog 
        </a>
      </li>
      <li class="flex font-medium rounded-md hover:bg-sky-600">
        <a href="{{ route('viajes.index') }}" class="w-full px-4 py-2">
          Viajes
        </a>
      </li>
    </ul>
  </div>
</nav>

<script>
  const handleBurgerClick = () => {
    const menu = document.querySelector("#menu");
    menu.classList.toggle("hidden")
  }
</script>

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