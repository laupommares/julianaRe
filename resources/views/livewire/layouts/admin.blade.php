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
    <body class="w-full h-screen bg-[#F5F6F8]">

        <div class="flex flex-basis">
            <div class="flex flex-col items-center w-60 bg-white h-full shadow-xl z-10 absolute p-4 text-dark-gray container rounded-2xl">
                <div class="my-8">
                    <img class="h-24 w-24 rounded-full mb-4" src="/juli.png" alt=""> <!-- Aquí puedes colocar la foto del usuario -->
                    <h1>Juliana Re</h1>
                </div>
                <ul class="flex flex-col items-center gap-2 w-full">
                    <li class="flex items-center gap-2 hover:bg-medium-gray hover:text-white px-4 py-2 rounded-md w-full">
                        <span class="material-symbols-outlined text-medium-gray text-2xl font-bold align-middle">dashboard</span>
                        <a href="/dashboard" >Admin Dashboard</a>
                    </li>
                    <li class="flex items-center gap-2 hover:bg-medium-gray hover:text-white px-4 py-2 rounded-md w-full">
                        <span class="material-symbols-outlined text-medium-gray text-2xl font-bold align-middle">news</span>
                        <a href="/dashboard/articles">Artículos</a>
                    </li>
                    <li class="flex items-center gap-2 hover:bg-medium-gray hover:text-white px-4 py-2 rounded-md w-full">
                        <span class="material-symbols-outlined text-medium-gray text-2xl font-bold align-middle">grocery</span>
                        <a href="/dashboard/articles">Recetas</a>
                    </li>
                </ul>
            </div>
            <div class="absolute right-0 w-[calc(100%-240px)]">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
