@extends('layouts.plantilla')

@section('title', 'EduFinMx - Editar perfil')

@section('contenido')
<div class="flex justify-center items-center min-h-screen bg-gray-100 p-4">
  <form action="{{ route('Actualizar') }}" method="POST" class="w-full max-w-3xl bg-white border border-gray-300 rounded-lg shadow-lg p-8 flex flex-col space-y-6">
    @csrf
    @method('PUT')

    <!-- Información del Perfil -->
    <div class="flex flex-col md:flex-row items-start space-y-6 md:space-y-0 md:space-x-6">

      <!-- Imagen de perfil -->
      <div class="flex-shrink-0 w-full md:w-1/3 flex flex-col items-center mb-6 md:mb-0">
        <div class="h-48 w-48 rounded-full bg-amber-100 flex items-center justify-center border-2 border-gray-300 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-amber-600">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>
        </div>
      </div>

      <!-- Información Adicional -->
      <div class="w-full md:w-2/3">
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Correo</div>
          <input name="Correo" class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="email" value="@auth {{Auth::user()->Correo}} @endauth">
        </div>
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Número</div>
          <input name="Telefono" class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="text" value="@auth {{Auth::user()->Telefono}} @endauth">
        </div>
      </div>
    </div>

    <!-- Información del perfil debajo de la imagen -->
    <div class="flex flex-col space-y-6">
      <div>
        <div class="text-2xl font-semibold text-amber-800 mb-2">Nombre Completo</div>
        <div class="flex space-x-4">
          <div class="flex flex-col flex-1">
            <label class="text-xl font-semibold text-amber-800 mb-1">Nombre(s)</label>
            <input name="Nombre" class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="text" value="@auth {{Auth::user()->Nombre}} @endauth">
          </div>
          <div class="flex flex-col flex-1">
            <label class="text-xl font-semibold text-amber-800 mb-1">Apellido Paterno</label>
            <input name="ApellidoPaterno" class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="text" value="@auth {{Auth::user()->ApellidoPaterno}} @endauth">
          </div>
          <div class="flex flex-col flex-1">
            <label class="text-xl font-semibold text-amber-800 mb-1">Apellido Materno</label>
            <input name="ApellidoMaterno" class="text-xl text-gray-700 w-full rounded-md border border-gray-300 p-2" type="text" value="@auth {{Auth::user()->ApellidoMaterno}} @endauth">
          </div>
        </div>
      </div>
    </div>

    <!-- Botón de Guardar Cambios -->
    <div class="flex justify-center">
      <button type="submit" class="bg-amber-300 text-white py-2 px-6 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
        Guardar Cambios
      </button>
    </div>
  </form>
</div>

@endsection
