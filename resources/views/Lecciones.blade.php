@extends('layouts.plantilla')

@section('title', 'Lecciones')

@section('contenido')

<div class="w-full h-full flex items-center justify-center bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4 flex items-center">
    <div class="flex-shrink-0 mr-4 flex items-center justify-center">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
  <path d="M11.25 4.533A9.707 9.707 0 0 0 6 3a9.735 9.735 0 0 0-3.25.555.75.75 0 0 0-.5.707v14.25a.75.75 0 0 0 1 .707A8.237 8.237 0 0 1 6 18.75c1.995 0 3.823.707 5.25 1.886V4.533ZM12.75 20.636A8.214 8.214 0 0 1 18 18.75c.966 0 1.89.166 2.75.47a.75.75 0 0 0 1-.708V4.262a.75.75 0 0 0-.5-.707A9.735 9.735 0 0 0 18 3a9.707 9.707 0 0 0-5.25 1.533v16.103Z" />
</svg>

    </div>
    <div class="flex flex-col items-center">
      <h2 class="text-2xl font-bold text-gray-800">Lecciones</h2>
      <p class="text-gray-700 text-center">Conoce más...</p>
    </div>
  </div>
</div>

<br>
<div class="flex items-center bg-amber-500 text-white rounded-lg p-4">
  <div class="flex rounded-full bg-white text-amber-500 h-12 w-12 items-center justify-center mr-4">
    <span class="text-xl font-bold">1</span>
  </div>
  <div>
    <h2 class="text-xl font-bold">Lección 1: Ahorro e Inversión</h2>
    <p class="text-lg mt-1">Aquí encontrarás información sobre ahorro e inversión, así como ejemplos y consejos para lograr tus objetivos financieros.</p>
  </div>
</div>

    <br>
    <section class="video-container">
        <br>
    
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
            <div class="bg-amber-500 text-white rounded-lg p-4 mb-4 flex items-center">
            <img src="imagenes/video.png" alt="Video" class="h-14 mr-2">
                <h4 class="text-xl text-center font-bold">Introducción al ahorro</h4>
            </div>
                <div class="relative" style="padding-top: 56.25%">
                <iframe src="https://www.youtube.com/embed/QEnDbr6Q_64" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
                </div>
        </div>
            </div>

            <br>

            <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-4">
            <div class="bg-amber-500 text-white rounded-lg p-4 mb-4 flex items-center">
            <img src="imagenes/video.png" alt="Video" class="h-14 mr-2">
                <h4 class="text-xl text-center font-bold">Estrategias de inversión</h4>
            </div>
                <div class="relative" style="padding-top: 56.25%">
                <iframe src="https://www.youtube.com/embed/h48Sqy6C2Zg" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
                </div>
        </div>
            </div>
        <br>
    </section>
    <div class="w-full bg-gray-200 mt-5 rounded-md">
        <div class="h-4 bg-green-500 rounded-md" style="width: 50%;"></div>
    </div>
    <div class="flex justify-center space-x-4">
        <button type="submit" class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 m-5">Anterior</button>
        <button type="submit" class="bg-amber-500 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 m-5">Siguiente</button>
    </div>
    <section class="lecciones">
        <h3 class="text-xl font-bold mt-1 mb-1">Otras lecciones</h3>
        <br>
        <ul class="text-xl text-blue-500 mt-1 mb-1">
            <a href="#">Lección 1: Introducción a las finanzas personales</a>
            <br>
            <a href="#">Lección 2: Presupuesto y planificación financiera</a>
            <br>
            <a href="#">Lección 3: Conceptos básicos de ahorro</a>
        </ul>
    </section>

    
@endsection
