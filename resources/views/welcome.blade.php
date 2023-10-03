<x-layouts.app title="Home" meta_description="Meta Home">

  <h1 class="my-4 font-bold text-3xl text-center text-sky-600 dark:text-sky-500">Inicio</h1>
  
  <section>
    <div class=" absolute pl-4 pt-0">
      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white px-4 py-6 m-4 rounded-md shadow-lg">
        <form action="" class="space-y-4">
  
          @include("components.input", ["id" => "latitud", "type" => "text", "value" => "", "txt" => "Latitud"])
          @include("components.input", ["id" => "longitud", "type" => "text", "value" => "", "txt" => "Longitud"])
          @include("components.btn_submit", ["txt" => "Calcular Viaje"])
          
        </form>
      </div>
    </div>
  
    <iframe 
      src="https://maps.google.com/maps?q=-33.036,-71.62963&output=embed" 
      frameborder="0"
      width="100%"
      height="500px"
    ></iframe>
  </section>

</x-layouts.app>



