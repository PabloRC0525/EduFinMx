@extends('layouts.plantilla')

@section('title', 'EduFinMx - Ahorro e Inversión')

@section('contenido')

<div class="w-full h-full flex items-center justify-center bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4 flex items-center">
    <div class="flex-shrink-0 mr-4 flex items-center justify-center">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
    <path fill-rule="evenodd" d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm4.5 7.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0v-2.25a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0V12Zm2.25-3a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0V9.75A.75.75 0 0 1 13.5 9Zm3.75-1.5a.75.75 0 0 0-1.5 0v9a.75.75 0 0 0 1.5 0v-9Z" clip-rule="evenodd" />
    </svg>

    </div>
    <div class="flex flex-col items-center">
      <h2 class="text-2xl font-bold text-gray-800">¡Bienvenido a la Sección de Ahorro e Inversión!</h2>
      <p class="text-gray-700 text-center">Aquí encontrarás información y herramientas para fortalecer tus finanzas personales y alcanzar tus objetivos financieros a largo plazo.</p>
    </div>
  </div>
</div>

<br>

    <section>


    <div class="bg-amber-500 text-white rounded-lg p-4 flex items-center">
  <div class="flex-shrink-0">
    <img src="imagenes/ahorro.png" alt="Ahorro" class="h-20 mr-2">
  </div>
  <div>
    <h2 class="text-xl font-bold">El Poder del Ahorro y la Inversión</h2>
    <p class="text-lg mt-1">El ahorro y la inversión son fundamentales para asegurar tu futuro financiero y alcanzar la libertad económica. Aprende cómo maximizar tu potencial financiero con estrategias inteligentes.</p>
  </div>
</div>
    </section>

<br>

<!--     <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
    <div class="bg-amber-500 text-white rounded-lg p-4 mb-4 flex items-center">
                <img src="imagenes/video.png" alt="Video" class="h-14 mr-2">
      <div>
        <h2 class="text-2xl font-bold">El poder del ahorro y la inversión</h2>
      </div>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-4">
        <div class="relative" style="padding-top: 56.25%;">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/QEnDbr6Q_64" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
        </div>
      </div>
      <div class="md:w-1/2 md:pl-4 flex justify-center items-center">
        <div class="text-center">
          <p class="text-justify">¿Sabes qué es?</p>
        </div>
      </div>
    </div>
  </div>
</div> -->

<br>
    <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
    <div class="bg-amber-500 text-white rounded-lg p-4 mb-4 flex items-center">
                <img src="imagenes/video.png" alt="Video" class="h-14 mr-2">
      <div>
        <h2 class="text-2xl font-bold">Estrategias de Ahorro</h2>
      </div>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-4">
        <div class="relative" style="padding-top: 56.25%;">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/QEnDbr6Q_64" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
        </div>
      </div>
      <div class="md:w-1/2 md:pl-4 flex justify-center items-center">
        <div class="text-center">
          <p class="text-justify">Descubre técnicas efectivas para ahorrar dinero en tu vida diaria y establecer un fondo de emergencia sólido. Automatiza tus ahorros, reduce gastos innecesarios y establece metas financieras realistas.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<br>

<div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
    <div class="bg-amber-500 text-white rounded-lg p-4 mb-4 flex items-center">
                <img src="imagenes/video.png" alt="Video" class="h-14 mr-2">
      <div>
        <h2 class="text-2xl font-bold">Estrategias de Inversión</h2>
      </div>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-4">
        <div class="relative" style="padding-top: 56.25%;">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/QEnDbr6Q_64" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
        </div>
      </div>
      <div class="md:w-1/2 md:pl-4 flex justify-center items-center">
        <div class="text-center">
          <p class="text-justify">Aprende sobre diferentes clases de activos, desde acciones y bonos hasta bienes raíces y fondos mutuos. Entiende cómo construir un portafolio de inversión diversificado que se alinee con tus objetivos y tolerancia al riesgo.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<br>
@endsection
