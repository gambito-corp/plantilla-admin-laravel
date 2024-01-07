<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{env('APP_NAME')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="container mx-auto mt-10">
            <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
                <div>
                    <div class="text-2xl font-medium text-red-900">¡Tailwind Funciona!</div>
                    <p class="text-gray-500">Si estás viendo este mensaje con estilos, Tailwind está funcionando correctamente.</p>
                </div>
            </div>
        </div>
    </body>
</html>
