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
            <svg class="w-12 h-12 mx-auto mb-4 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5v.75m0-11.25v.75m6.364 7.636a9.012 9.012 0 0 0-1.451-4.545M6.636 15.636a9.012 9.012 0 0 0 1.451-4.545m-.364-1.5c0-.554.447-1 1-1h8c.553 0 1 .446 1 1s-.447 1-1 1H8c-.553 0-1-.446-1-1zm4 6.75c-1.026 0-1.845-1.13-1.845-1.845 0-.949.964-1.845 1.845-1.845 1.026 0 1.845 1.13 1.845 1.845 0 .949-.964 1.845-1.845 1.845z"/>
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
