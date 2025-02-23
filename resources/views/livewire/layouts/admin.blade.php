<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        
        <title>@yield('title', 'Admin')</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    </head>
    <body class="bg-white">

        <div class="w-full p-4 text-dark container">
            <ul class="flex gap-8">
                <li>
                    <a href="/dashboard">Admin Dashboard</a>
                </li>
                <li>
                    <a href="/dashboard/articles">Artículos</a>
                </li>
            </ul>
        </div>
        <div> {{-- Contenedor principal para Livewire --}}
            {{ $slot }}
        </div>
    

    </body>
</html>
