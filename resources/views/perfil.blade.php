@extends('layouts.plantilla')

@section('title', 'EduFinMx - Perfil')

@section('contenido')
<perfil class="flex justify-center align-middle">

    <div class="h-96 w-3/4 bg-blue-100 border-solid border-2 border-gray-700 rounded-md flex justify-between items-center">
        
        <div class="h-60 w-60 rounded-full text-right">
          <div class="text-2xl text-blue-800">Nombre</div>
          <div class="text-xl text-black-400">Pablo Enrique Ramírez Carrillo</div>

        </div>

        <div class="h-60 w-60 rounded-full flex flex-col">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>

          <button onclick="EditarA()" class="bg-blue-300 py-3 px-4 rounded-lg mt-5 hover:bg-blue-500 hover:text-gray-100">
            Editar
          </button>
          <script>
            function EditarA() {
                // Aquí redirige a la vista 'user'
                window.location.href = 'edit';
            }
        </script>

          <button onclick="Medallas()" class="bg-blue-300 py-3 px-4 rounded-lg mt-5 hover:bg-blue-500 hover:text-gray-100">
            Mis medallas
          </button>
          <script>
            function Medallas() {
                // Aquí redirige a la vista 'medallas'
                window.location.href = 'medallas';
            }
          </script>

        </div>

        <div class="h-60 w-60 rounded-lg text-left">

          <div class="text-2xl text-blue-800">Correo</div>
          <div class="text-xl pb-6 text-black-400">pablo@example.com</div>

            <div class="text-2xl text-blue-800">Número:</div>
            <div class="text-xl text-black-400">441-116-6013</div>

        </div>

    </div>

  </perfil>

@endsection