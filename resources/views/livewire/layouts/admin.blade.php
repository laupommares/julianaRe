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
    <body class="bg-[#F5F6F8]">
        <div class="flex min-h-screen">
            <!-- Sidebar -->
            <div class="w-60 bg-white rounded-xl shadow-xl p-4 text-dark-gray flex flex-col items-center min-h-screen">
                <div class="my-8">
                    <img class="h-24 w-24 rounded-full mb-4" src="/juli.png" alt=""> <!-- Aquí puedes colocar la foto del usuario -->
                    <h1>Juliana Re</h1>
                </div>
                <ul class="flex flex-col items-center gap-2 w-full">
                    <li class="flex items-center gap-2 group hover:bg-medium-gray  fo px-4 py-2 rounded-md w-full group cursor-pointer">
                        <span class="material-symbols-outlined text-medium-gray text-2xl font-bold align-middle group-hover:text-white">dashboard</span>
                        <a href="/dashboard" class="group-hover:text-white">Admin Dashboard</a>
                    </li>
                    <li class="flex items-center gap-2 group hover:bg-medium-gray px-4 py-2 rounded-md w-full group cursor-pointer">
                        <span class="material-symbols-outlined text-medium-gray group-hover:text-white text-2xl font-bold align-middle">news</span>
                        <a href="/dashboard/articles" class="group-hover:text-white">Artículos</a>
                    </li>
                    <li class="flex items-center gap-2 group hover:bg-medium-gray px-4 py-2 rounded-md w-full group cursor-pointer">
                        <span class="material-symbols-outlined text-medium-gray group-hover:text-white text-2xl font-bold align-middle">grocery</span>
                        <a href="/dashboard/recipes" class="group-hover:text-white">Recetas</a>
                    </li>
                </ul>
                <div class="w-full bg-medium-gray h-[1px] my-8"></div>
                <ul class="flex flex-col items-center gap-2 w-full">
                    <li class="flex items-center gap-2 group hover:bg-medium-gray px-4 py-2 rounded-md w-full group cursor-pointer">
                        <span class="material-symbols-outlined text-medium-gray hover text-2xl font-bold align-middle group-hover:text-white">home</span>
                        <a href="/" class="group-hover:text-white">Home</a>
                    </li>
                </ul>
            </div>
            <!-- Contenido -->
            <div class="flex-1 bg-[#F5F6F8] p-6">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
