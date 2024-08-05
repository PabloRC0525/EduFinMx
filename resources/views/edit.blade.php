@extends('layouts.plantilla')

@section('title', 'EduFinMx - Editar perfil')

@section('contenido')
<div class="flex justify-center items-center min-h-screen bg-gray-100 p-4">
  <div class="w-full max-w-3xl bg-white border border-gray-300 rounded-lg shadow-lg p-8 flex flex-col space-y-6">

    <!-- Información del Perfil -->
    <div class="flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-6">

      <!-- Imagen de perfil y nombre -->
      <div class="flex-shrink-0 w-full md:w-1/3 flex flex-col items-center">
        <div class="h-40 w-40 rounded-full bg-amber-100 flex items-center justify-center border-2 border-gray-300 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-amber-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
        </div>
        <div class="text-center">
          <div class="text-2xl font-semibold text-amber-800">Nombre(s)</div>
          <input class="text-xl text-gray-700 w-52 rounded-md border border-gray-300 p-2" type="text" value="Pablo Enrique">
          <div class="text-2xl font-semibold text-amber-800">Apellido Paterno</div>
          <input class="text-xl text-gray-700 w-52 rounded-md border border-gray-300 p-2" type="text" value="Ramírez">
          <div class="text-2xl font-semibold text-amber-800">Apellido Materno</div>
          <input class="text-xl text-gray-700 w-52 rounded-md border border-gray-300 p-2" type="text" value="Carrillo">
        </div>
      </div>

      <!-- Información Adicional -->
      <div class="w-full md:w-2/3">
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Correo</div>
          <input class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="email" value="pablo@example.com">
        </div>
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Número</div>
          <input class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="text" value="4411166013">
        </div>
      </div>
    </div>

    <!-- Botón de Guardar Cambios -->
    <div class="flex justify-end">
      <button onclick="Guardar()" class="bg-amber-300 text-white py-2 px-6 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
        Guardar Cambios
      </button>
    </div>
  </div>
</div>

<script>
  function Guardar() {
      // Aquí redirige a la vista 'perfil'
      window.location.href = 'perfil';
  }
</script>

@endsection

