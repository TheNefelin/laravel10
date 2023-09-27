<x-layouts.app title="Home" meta_description="Meta Home">

  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-16 w-auto" src="/logo.png" alt="Logo">
      <h1 class="my-4 font-bold text-3xl text-center text-sky-600 dark:text-sky-500">Iniciar Sesión</h1>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('login') }}" method="POST">
        @csrf

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
          @error('email')
          <small class=" text-red-600">{{ $message }}</small>
          @enderror
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div class="flex justify-between text-sm font-semibold text-indigo-600 hover:text-indigo-500">
          <div>
            <input type="checkbox" name="remember" id="remember">
            Recordar
          </div>

          <div>
            <a href="#" >Recuperar Contraseña?</a>
          </div>
        </div>
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Iniciar Sessión</button>
        </div>
      </form>
  
    </div>
  </div>

</x-layouts.app>


