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
    <body>
        <div class="relative flex flex-basis">
            <div class="flex flex-col items-center w-60 bg-white h-screen shadow-xl z-10 absolute p-4 text-dark-gray container">
                <img src="{{ asset('logo.png') }}" class="w-20 h-20 my-10" alt="">

                <ul class="flex flex-col items-center gap-2 w-full">
                    <img src="" alt="">
                    <li class="hover:bg-white px-4 py-2 rounded-md w-full">
                        <a href="/dashboard">Admin Dashboard</a>
                    </li>
                    <li class="hover:bg-white focus:bg-white px-4 py-2 rounded-md w-full">
                        <a href="/dashboard/articles">Artículos</a>
                    </li>
                </ul>
            </div>
            <div class="absolute right-0 w-[calc(100%-240px)] bg-[#FAFAFA]">
                {{ $slot }}
            </div>
        </div>

    </body>
</html>
