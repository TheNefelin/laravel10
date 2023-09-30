<x-layouts.app title="Blog" meta_description="Meta Viaje Create">

  <h1 class="my-4 font-bold text-3xl text-center text-sky-600">Solicitar Viajes</h1>

  <div class="flex min-h-full flex-col justify-center px-6 lg:px-8">
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">

      <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf
  
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-slate-400">Nombre</label>
          <div class="mt-2">
            <input id="name" name="name" 
              type="text" 
              value="{{ old('name') }}"
              class="txt_p block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
          </div>
          @error('name')
          <small class=" text-red-600">{{ $message }}</small>
          @enderror
        </div>
  
        <div>
          <label for="surname" class="block text-sm font-medium leading-6 text-slate-400">Apellido</label>
          <div class="mt-2">
            <input id="surname" name="surname" 
              type="text" 
              value="{{ old('surname') }}"
              class="txt_p block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
          </div>
          @error('surname')
          <small class=" text-red-600">{{ $message }}</small>
          @enderror
        </div>
  
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
  
        <div>
          <label for="password_confirmation" class="block text-sm font-medium leading-6 text-slate-400">Confirmar Contraseña</label>
          <div class="mt-2">
            <input id="password_confirmation" name="password_confirmation" 
              type="password" 
              value="{{ old('password_confirmation') }}"
              class="txt_p block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
          </div>
          @error('password_confirmation')
          <small class=" text-red-600">{{ $message }}</small>
          @enderror
        </div>
  
        <div class="pt-4">
          <button 
            type="submit" 
            class="flex w-full justify-center rounded-md bg-sky-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600"
            >Crear Usuario
          </button>
        </div>
  
      </form>

    </div>
  </div>
  
</x-layouts.app>
