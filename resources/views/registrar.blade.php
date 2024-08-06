<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full space-y-8 p-8 bg-white shadow-lg rounded-lg">
        <div class="text-center">
            <svg class="w-12 h-12 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
            </svg>
            
            <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                Registro de Usuario
            </h2>
            <p class="text-sm text-gray-600">
                <a href="/" class="font-medium text-indigo-600 hover:text-indigo-500">
                    ¿Ya tienes cuenta? Inicia sesión
                </a>
            </p>
        </div>
        <form id="registrationForm" class="space-y-6" method="POST" action="{{ route('registrar-usuario') }}">
            @csrf
            <!-- Campos del formulario -->
            <div class="rounded-md shadow-sm space-y-4">
                <!-- Campos del formulario como antes -->
                <div>
                    <label for="Nombre" class="sr-only">Nombre</label>
                    <input id="Nombre" name="Nombre" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Nombre">
                </div>
                <div>
                    <label for="ApellidoPaterno" class="sr-only">Apellido Paterno</label>
                    <input id="ApellidoPaterno" name="ApellidoPaterno" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Apellido Paterno">
                </div>
                <div>
                    <label for="ApellidoMaterno" class="sr-only">Apellido Materno</label>
                    <input id="ApellidoMaterno" name="ApellidoMaterno" type="text" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Apellido Materno">
                </div>
                <div>
                    <label for="email" class="sr-only">Correo electrónico</label>
                    <input id="email" name="email" type="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Correo electrónico">
                </div>
                <div>
                    <label for="Telefono" class="sr-only">Número de Teléfono</label>
                    <input id="Telefono" name="Telefono" type="tel" pattern="\d{10}" maxlength="10" required
                           class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                           placeholder="Número de Teléfono"
                           oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>
                <div>
                    <label for="Contraseña" class="sr-only">Contraseña</label>
                    <input id="Contraseña" name="Contraseña" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Contraseña">
                </div>
                <div>
                    <label for="password_confirmation" class="sr-only">Confirmar Contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirmar Contraseña">
                </div>
            </div>
        
            <div class="flex justify-center mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-300">
                    Registrarse
                </button>
            </div>
        </form>
        <p class="mt-4 text-center text-sm text-gray-600">
            <a href="/" class="font-medium text-indigo-600 hover:text-indigo-500">
                ¿Ya tienes cuenta? Inicia sesión
            </a>
        </p>
        @if ($errors->any())
            <script>
                let errorMessage = '';
                @if ($errors->has('email'))
                    errorMessage = "{{ $errors->first('email') }}";
                @elseif ($errors->has('Telefono'))
                    errorMessage = "{{ $errors->first('Telefono') }}";
                @else
                    errorMessage = "{{ $errors->first() }}";
                @endif

                if (errorMessage) {
                    Swal.fire({
                        title: 'Error',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            </script>
        @endif
    </div>
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            var contraseña = document.getElementById('Contraseña').value;
            var confirmacionContraseña = document.getElementById('password_confirmation').value;
        
            if (contraseña !== confirmacionContraseña) {
                event.preventDefault(); // Detener el envío del formulario
                Swal.fire({
                    title: 'Error',
                    text: 'Las contraseñas no coinciden.',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            }
        });
    </script>
</body>
</html>
