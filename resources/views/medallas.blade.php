@extends('layouts.plantilla')

@section('title', 'Mis medallas')

@section('contenido')

    <style>
        .carousel {
            position: relative;
            overflow: hidden;
        }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease;
        }
        .carousel-item {
            min-width: 100%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            position: relative;
        }
        .carousel-control {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 0.5rem;
            cursor: pointer;
            z-index: 10;
        }
        .carousel-control-prev {
            left: 0;
        }
        .carousel-control-next {
            right: 0;
        }
    </style>
</head>
<body>

    <div class="w-full h-full flex items-center justify-center bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-4 flex items-center">
            <div class="flex-shrink-0 mr-4 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-20 w-20 text-amber-500">
                    <path fill-rule="evenodd" d="M5.166 2.621v.858c-1.035.148-2.059.33-3.071.543a.75.75 0 0 0-.584.859 6.753 6.753 0 0 0 6.138 5.6 6.73 6.73 0 0 0 2.743 1.346A6.707 6.707 0 0 1 9.279 15H8.54c-1.036 0-1.875.84-1.875 1.875V19.5h-.75a2.25 2.25 0 0 0-2.25 2.25c0 .414.336.75.75.75h15a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-2.25-2.25h-.75v-2.625c0-1.036-.84-1.875-1.875-1.875h-.739a6.706 6.706 0 0 1-1.112-3.173 6.73 6.73 0 0 0 2.743-1.347 6.753 6.753 0 0 0 6.139-5.6.75.75 0 0 0-.585-.858 47.077 47.077 0 0 0-3.07-.543V2.62a.75.75 0 0 0-.658-.744 49.22 49.22 0 0 0-6.093-.377c-2.063 0-4.096.128-6.093.377a.75.75 0 0 0-.657.744Zm0 2.629c0 1.196.312 2.32.857 3.294A5.266 5.266 0 0 1 3.16 5.337a45.6 45.6 0 0 1 2.006-.343v.256Zm13.5 0v-.256c.674.1 1.343.214 2.006.343a5.265 5.265 0 0 1-2.863 3.207 6.72 6.72 0 0 0 .857-3.294Z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="flex flex-col items-center">
                <h2 class="text-2xl font-bold text-gray-800">Mis Medallas Financieras</h2>
                <p class="text-gray-700 text-center">Reconociendo logros en el camino hacia una salud financiera óptima.</p>
            </div>
        </div>
    </div>

    <br>

    <div class="carousel relative">
        <div class="carousel-inner flex">
            <div class="carousel-item">
                <div class="w-64 h-64 rounded-full overflow-hidden shadow-2xl flex items-center justify-center mb-4">
                    <img src="./imagenes/ahorroFin.png" alt="Segundo" class="w-full h-full object-cover">
                </div>
                <div class="bg-white shadow-2xl rounded-lg p-4 max-w-xs text-center">
                    <h3 class="text-lg font-semibold">Medalla de Ahorro Eficaz</h3>
                    <p class="mt-2 text-justify">Premio por alcanzar una meta de ahorro significativa. Este logro refleja un excelente manejo de tus recursos financieros, promoviendo hábitos de ahorro consistentes y efectivos.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-64 h-64 rounded-full overflow-hidden shadow-2xl flex items-center justify-center mb-4">
                    <img src="./imagenes/trophy.png" alt="Trofeo" class="w-40 h-40 object-cover">
                </div>
                <div class="bg-white shadow-2xl rounded-lg p-4 max-w-xs text-center">
                    <h3 class="text-lg font-semibold">Trofeo de Educación Financiera</h3>
                    <p class="mt-2 text-justify">Medalla otorgada por completar con éxito un curso de educación financiera. Este logro demuestra tu compromiso con la adquisición de conocimientos clave para una gestión financiera sólida.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="w-64 h-64 rounded-full overflow-hidden shadow-2xl flex items-center justify-center mb-4">
                    <img src="./imagenes/planificacion.png" alt="Tercero" class="w-full h-full object-cover">
                </div>
                <div class="bg-white shadow-2xl rounded-lg p-4 max-w-xs text-center">
                    <h3 class="text-lg font-semibold">Medalla de Planificación Financiera</h3>
                    <p class="mt-2 text-justify">Reconocimiento por diseñar y seguir un plan financiero robusto. Este trofeo simboliza tu habilidad para establecer y alcanzar objetivos financieros a largo plazo.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control carousel-control-prev" onclick="prevSlide()">❮</button>
        <button class="carousel-control carousel-control-next" onclick="nextSlide()">❯</button>
    </div>

    <script>
        let currentIndex = 0;

        function showSlide(index) {
            const slides = document.querySelectorAll('.carousel-item');
            const totalSlides = slides.length;

            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }

            const offset = -currentIndex * 100;
            document.querySelector('.carousel-inner').style.transform = `translateX(${offset}%)`;
        }

        function nextSlide() {
            showSlide(currentIndex + 1);
        }

        function prevSlide() {
            showSlide(currentIndex - 1);
        }
    </script>
</body>
@endsection