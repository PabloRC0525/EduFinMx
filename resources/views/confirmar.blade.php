<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-md w-full space-y-8 p-8 bg-white shadow-lg rounded-lg">
        <div class="text-center">
            <svg class="w-12 h-12 mx-auto mb-4 text-red-500" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
              </svg>
            <h2 class="text-2xl font-extrabold text-gray-900">Eliminar Cuenta</h2>
            <p class="mt-2 text-gray-600">¿Estás seguro de que deseas eliminar tu cuenta? Esta acción es irreversible.</p>
        </div>
        <form method="POST" action="{{ route('eliminar-cuenta') }}">
            @csrf
            @method('DELETE')
            <div class="flex justify-center space-x-4">
                <button type="submit" class="bg-red-500 text-white py-2 px-6 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                    Eliminar Cuenta
                </button>
                <a href="{{ route('perfil') }}">
                    <button type="button" class="bg-yellow-300 text-white py-2 px-6 rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-opacity-50">
                        Cancelar
                    </button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>
