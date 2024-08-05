@extends('layouts.plantilla')

@section('title', 'EduFinMx - Perfil')

@section('contenido')

<div class="bg-gray-100 min-h-screen flex items-center justify-center">

  <!-- Contenedor de la tarjeta centrada -->
  <div class="w-full max-w-4xl bg-white border border-gray-300 rounded-lg shadow-lg p-8 flex flex-col md:flex-row">

    <!-- Imagen de perfil y nombre -->
    <div class="flex-shrink-0 w-full md:w-1/3 flex items-center justify-center mb-6 md:mb-0">
      <div class="h-48 w-48 rounded-full bg-amber-100 flex items-center justify-center border-2 border-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-32 h-32 text-amber-600">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
      </div>
    </div>

    <!-- Información adicional y botones -->
    <div class="w-full md:w-2/3 flex flex-col md:flex-row justify-between items-start">
      <!-- Información del perfil -->
      <div class="flex-grow">
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Nombre</div>
          <div class="text-xl text-gray-700">
            @auth {{Auth::user()->Nombre}} @endauth
            @auth {{Auth::user()->ApellidoPaterno}} @endauth
            @auth {{Auth::user()->ApellidoMaterno}} @endauth
          </div>
        </div>
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Correo</div>
          <div class="text-xl text-gray-700">@auth {{Auth::user()->Correo}} @endauth</div>
        </div>
        <div class="mb-6">
          <div class="text-2xl font-semibold text-amber-800">Número</div>
          <div class="text-xl text-gray-700">@auth {{Auth::user()->Telefono}} @endauth</div>
        </div>
      </div>

      <!-- Botones de acción -->
      <div class="flex flex-col space-y-4">
        <a href="{{ route('edit') }}"><button class="bg-amber-300 text-white py-2 px-20 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
          Editar
        </button></a>
        <a href="{{ route('medallas') }}"><button class="bg-amber-300 text-white py-2 px-12 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
          Mis Medallas
        </button></a>
        <a href="{{ route('logout') }}" class="text-end">
          <button type="button" class="bg-amber-300 text-white py-2 px-12 rounded-lg hover:bg-amber-500 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-opacity-50">
            Cerrar sesión
          </button>
        </a>
        <a href="{{ route('confirmar') }}" class="text-end">
          <button type="button" class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-700 focus:ring-opacity-50">
            Eliminar mi cuenta
          </button>
        </a>
      </div>
    </div>
  </div>

  <script>
    function EditarA() {
        window.location.href = 'edit';
    }
    
    function Medallas() {
        window.location.href = 'medallas';
    }
  </script>
</div>
@if (session('success'))
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire({
    icon: 'success',
    title: '¡Éxito!',
    text: '{{ session('success') }}',
    confirmButtonText: 'Aceptar'
  });
</script>
@endif
@endsection
