@extends('layouts.plantilla')

@section('title', 'EduFinMx - Declaraciones')

@section('contenido')


<div class="w-full h-full flex items-center justify-center bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4 flex items-center">
    <div class="flex-shrink-0 mr-4 flex items-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
        <path d="M10.464 8.746c.227-.18.497-.311.786-.394v2.795a2.252 2.252 0 0 1-.786-.393c-.394-.313-.546-.681-.546-1.004 0-.323.152-.691.546-1.004ZM12.75 15.662v-2.824c.347.085.664.228.921.421.427.32.579.686.579.991 0 .305-.152.671-.579.991a2.534 2.534 0 0 1-.921.42Z" />
        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v.816a3.836 3.836 0 0 0-1.72.756c-.712.566-1.112 1.35-1.112 2.178 0 .829.4 1.612 1.113 2.178.502.4 1.102.647 1.719.756v2.978a2.536 2.536 0 0 1-.921-.421l-.879-.66a.75.75 0 0 0-.9 1.2l.879.66c.533.4 1.169.645 1.821.75V18a.75.75 0 0 0 1.5 0v-.81a4.124 4.124 0 0 0 1.821-.749c.745-.559 1.179-1.344 1.179-2.191 0-.847-.434-1.632-1.179-2.191a4.122 4.122 0 0 0-1.821-.75V8.354c.29.082.559.213.786.393l.415.33a.75.75 0 0 0 .933-1.175l-.415-.33a3.836 3.836 0 0 0-1.719-.755V6Z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="flex flex-col items-center">
      <h2 class="text-2xl font-bold text-gray-800">Declaraciones en Educación Financiera</h2>
      <p class="text-gray-700 text-center">¿Conoces todo acerca de las declaraciones?</p>
    </div>
  </div>
</div>



    <br>

    <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
    <div class="bg-amber-500 text-white rounded-lg p-4 mb-4">
      <h2 class="text-2xl font-bold text-center">Declaración 1: Importancia del Presupuesto Mensual</h2>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-4">
        <p class="text-gray-700 text-justify">Un presupuesto mensual es una herramienta esencial para gestionar eficazmente las finanzas personales. Proporciona una visión clara de los ingresos y gastos, lo que permite tomar decisiones informadas para alcanzar metas financieras a corto y largo plazo.</p>
      </div>
      <div class="md:w-1/2 md:pl-4">
        <div class="relative" style="padding-top: 56.25%;">
          <iframe src="https://www.youtube.com/embed/3lDeoYZwatY" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<br>

    
    <div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
  <div class="bg-amber-500 text-white rounded-lg p-4 mb-4">
    <h2 class="text-2xl font-bold text-center">Declaración 2: Diversificación de Inversiones</h2>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-4">
        <p class="text-gray-700 text-justify">La diversificación de inversiones es clave para mitigar el riesgo en el mercado financiero. Al distribuir los fondos en diferentes clases de activos, como acciones, bonos y bienes raíces, se puede reducir la exposición a la volatilidad y proteger el capital invertido.</p>
      </div>
      <div class="md:w-1/2 md:pl-4">
        <div class="relative" style="padding-top: 56.25%;">
          <iframe src="https://www.youtube.com/embed/gsht4_GtXsk" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="w-full mx-auto bg-white shadow-md rounded-lg overflow-hidden">
  <div class="p-4">
  <div class="bg-amber-500 text-white rounded-lg p-4 mb-4">
    <h2 class="text-2xl font-bold text-center">Declaración 3: Planificación a Largo Plazo</h2>
    </div>
    <div class="md:flex">
      <div class="md:w-1/2 md:pr-4">
        <p class="text-gray-700 text-justify">La planificación financiera a largo plazo es fundamental para garantizar la estabilidad económica y el bienestar futuro. Implica establecer metas financieras claras, desarrollar estrategias de ahorro e inversión adecuadas, y revisar regularmente el progreso hacia dichas metas.</p>
      </div>
      <div class="md:w-1/2 md:pl-4">
        <div class="relative" style="padding-top: 56.25%;">
          <iframe src="https://www.youtube.com/embed/RsBC0YvCbLE" frameborder="0" allowfullscreen class="absolute inset-0 w-full h-full"></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
    

@endsection
