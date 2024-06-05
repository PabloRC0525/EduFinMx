@extends('layouts.plantilla')

@section('title', 'Lecciones')

@section('contenido')
<h2 class="text-3xl font-bold mt-1 mb-1">Lección actual: Ahorro e inversión</h2>
<br>
    <p Class="text-xl mt-1 mb-1">Aquí encontrarás información sobre ahorro e inversión, así como ejemplos y consejos para lograr tus objetivos financieros.</p>
    <br>
    <div class="texto-muestra">
        <p Class="text-xl mt-1 mb-1">Este es un texto de muestra para ilustrar contenido adicional relacionado con la lección actual.</p>
    </div>
    <br>
    <section class="video-container">
        <h3 class="text-2xl font-bold mt-1 mb-1">Videos</h3>
        <br>
        <div>
            <br>
            <h4 class="text-xl font-bold mt-1 mb-5">Video 1: Introducción al ahorro</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/QEnDbr6Q_64" frameborder="0" allowfullscreen></iframe>
        </div>
        <div>
            <br>
            <h4 class="text-xl font-bold mt-1 mb-5">Video 2: Estrategias de inversión</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/h48Sqy6C2Zg" frameborder="0" allowfullscreen></iframe>
        </div>
        <br>
    </section>
    <div class="w-full bg-gray-200 mt-5 rounded-md">
        <div class="h-4 bg-green-500 rounded-md" style="width: 50%;"></div>
    </div>
    <div class="flex justify-center space-x-4">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 m-5">Anterior</button>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300 m-5">Siguiente</button>
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
