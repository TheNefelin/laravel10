<div>
  <label for={{ $id }} class="block text-sm font-medium leading-6 text-slate-400">
    {{ $txt }}
  </label>

  <div class="mt-2">
    <input id={{ $id }} name={{ $id }}
      type={{ $type }}
      value="{{ old( $id ) }}"
      class="txt_p block w-full rounded-md border-0 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
  </div>

  @error( $id )
  <small class=" text-red-600">{{ $message }}</small>
  @enderror
</div>
