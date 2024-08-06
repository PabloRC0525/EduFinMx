@extends('layouts.plantilla')

@section('title', 'EduFinMx - Página de Inicio')

@section('contenido')


<div class="flex items-center justify-center mt-8">

  <div class="mr-4">
    <img src="./imagenes/logo2.png" alt="Logo de EduFinMx" class="h-44 w-44">
  </div> 
  
  <h2 class="text-6xl font-bold text-center mt-1 mb-1">
    <span class="bg-gradient-to-r from-amber-500 to-amber-900 text-transparent bg-clip-text">EduFin</span>
    <span class="bg-gradient-to-r from-amber-900 to-amber-500 text-transparent bg-clip-text">Mx</span>
  </h2>
</div>



<div class="bg-white shadow-md rounded-lg overflow-hidden mx-auto max-w-4xl p-4">
  <p class="text-lg lg:text-xl xl:text-2xl text-justify mt-4 mb-4">
    ¡Bienvenido a EduFinMX, tu destino confiable para aprender sobre educación financiera! Nuestra misión es proporcionarte los conocimientos y herramientas necesarios para tomar decisiones financieras inteligentes y alcanzar tus metas económicas.
  </p>
</div>



<div class="max-w-4xl mx-auto">
  <h2 class="text-2xl font-bold mt-8">Beneficios Clave:</h2>

  <div class="flex flex-wrap justify-center mt-4">
    <!-- Cuadro 1 -->
    <div class="w-full md:w-1/2 lg:w-1/4 p-4">
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex items-center justify-center flex-col h-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" />
    </svg>

        <p class="text-lg mt-2 p-4 text-center">Aprende a administrar tu dinero de manera efectiva.</p>
      </div>
    </div>

    <!-- Cuadro 2 -->
    <div class="w-full md:w-1/2 lg:w-1/4 p-4">
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex items-center justify-center flex-col h-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
        <path d="M12.75 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM7.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM8.25 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM9.75 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM10.5 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM12.75 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM14.25 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 17.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 15.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5ZM15 12.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM16.5 13.5a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" />
        <path fill-rule="evenodd" d="M6.75 2.25A.75.75 0 0 1 7.5 3v1.5h9V3A.75.75 0 0 1 18 3v1.5h.75a3 3 0 0 1 3 3v11.25a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3V7.5a3 3 0 0 1 3-3H6V3a.75.75 0 0 1 .75-.75Zm13.5 9a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5Z" clip-rule="evenodd" />
    </svg>
        <p class="text-lg mt-2 p-4 text-center">Mejora tu planificación financiera y alcanza tus metas.</p>
      </div>
    </div>

    <!-- Cuadro 3 -->
    <div class="w-full md:w-1/2 lg:w-1/4 p-4">
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex items-center justify-center flex-col h-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
        <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
        <path fill-rule="evenodd" d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z" clip-rule="evenodd" />
        <path d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
    </svg>

        <p class="text-lg mt-2 p-4 text-center">Domina conceptos clave como presupuesto, ahorro e inversión.</p>
      </div>
    </div>

    <!-- Cuadro 4 -->
    <div class="w-full md:w-1/2 lg:w-1/4 p-4">
      <div class="bg-white shadow-md rounded-lg overflow-hidden flex items-center justify-center flex-col h-full">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
        </svg>

        <p class="text-lg mt-2 p-4 text-center">Obtén asesoramiento experto para superar tus desafíos financieros.</p>
      </div>
    </div>
  </div>
</div>

@endsection
