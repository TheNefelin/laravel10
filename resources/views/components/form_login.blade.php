<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
  <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
      @csrf

      <div>
        <label for="email" class="block text-sm font-medium leading-6 text-slate-400">Correo</label>
        <div class="mt-2">
          <input id="email" name="email" 
            type="email" 
            value="{{ old('email') }}"
            class="txt_p block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
        </div>
        @error('email')
        <small class=" text-red-600">{{ $message }}</small>
        @enderror
      </div>

      <div>
        <label for="password" class="block text-sm font-medium leading-6 text-slate-400">Contraseña</label>
        <div class="mt-2">
          <input id="password" name="password" 
            type="password" 
            value="{{ old('password') }}"
            class="txt_p block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
        </div>
        @error('password')
        <small class=" text-red-600">{{ $message }}</small>
        @enderror
      </div>

      @error('failed')
      <small class=" text-red-600">{{ $message }}</small>
      @enderror

      <div class="text-sm flex justify-between">
        <div class="text-sm font-semibold text-sky-600 hover:text-sky-500">
          <input type="checkbox" name="remember" id="remember">
          <label for="remember">Recordar</label>
        </div>        
        <div>
          <a href="#" 
          class="flex justify-between text-sm font-semibold text-sky-600 hover:text-sky-500"
            >Recuperar Contraseña?
          </a>
        </div>
      </div>

      <div>
        <button 
          type="submit" 
          class="flex w-full justify-center rounded-md bg-sky-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600"
          >Iniciar Sesión
        </button>
      </div>

    </form>

  </div>
</div>
