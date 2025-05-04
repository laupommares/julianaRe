<div x-data="{ isOpen: false }">
    <nav class="w-full h-20 bg-green bg-opacity-80 fixed z-40">
        <div class="flex items-center justify-between container">
            <div class="flex">
                <a href="/">
                    <img src="{{ asset('logo.png') }}" class="w-20 h-20" alt="">
                </a>
                <ul class="flex space-x-4 m-6 max-lg:hidden">
                    @foreach ($menuOptions as $option => $route)
                        @php
                            $isActive = request()->is(trim($route, '/')) || request()->is(trim($route, '/'). '/*');
                        @endphp
                        <li class="flex text-sm font-raleway items-center font-semibold">
                            <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white rounded-md px-3 py-2 flex items-center text-dark font-serif {{ $isActive ? 'text-dark bg-white' : '' }} ">{{ $option }}</a>
                        </li>
                    @endforeach 
                </ul>
            </div>
            <div class="flex max-lg:hidden">
                @if ($isAuthenticated)
                <button type="button" class="relative h-12 w-12 m-2 bg-light-orange rounded-full inline-flex items-center justify-center text-white hover:bg-orange hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="material-symbols-outlined text-white">
                        notification_important
                    </span>
                </button>   
                <div class="relative">
                    <!-- Botón de usuario con desplegable -->
                    <button @click="isOpen = !isOpen" type="button" class="relative h-12 w-12 m-2 inline-flex rounded-full bg-green-dark text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-dark" aria-expanded="false" aria-haspopup="true">
                        <img class="h-12 w-12 rounded-full" src="/juli.png" alt=""> <!-- Aquí puedes colocar la foto del usuario -->
                    </button>

                    <!-- Menú desplegable -->
                    <div x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <!-- Opción de Perfil -->
                            <!-- Opción de Perfil como link -->
                            <a href="{{ route('user-profile') }}" class="block text-start w-full px-4 py-2 text-sm text-green-dark hover:bg-gray-100">Perfil</a>
                            <!-- Opción de Cerrar sesión -->
                            <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-sm text-green-dark hover:bg-gray-100">
                                @csrf
                                <button type="submit" class="w-full text-left">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                    <!-- Mostrar el botón de inicio de sesión/registro cuando no está autenticado -->
                    <li type="button" @click="$dispatch('open-login-modal')" class="flex text-sm font-raleway items-center font-semibold cursor-pointer">
                        <span class="w-full px-3 py-2 text-base h-full hover:bg-white rounded-md flex items-center text-dark font-serif">Iniciá Sesión/Registrate</span>
                    </li>
                @endif
            </div>

            {{-- Menu responsive --}}
            <div class="max-lg:block lg:hidden">
                <button @click="isOpen = !isOpen">
                    <span class="material-symbols-outlined text-dark" style="font-size: 48px;">
                        menu
                    </span>
                </button>
                <div x-show="isOpen" class="absolute bg-green bg-opacity-80 top-20 right-0 h-auto w-4/5">
                    <ul class="flex flex-col">
                        <li type="button" @click="$dispatch('open-login-modal')" class="flex text-sm font-raleway items-center font-semibold cursor-pointer">
                            <span class="w-full p-4 text-base h-full hover:bg-white flex items-center text-dark font-serif">Iniciá Sesión/Registrate</span>
                        </li>
                        @foreach ($menuOptions as $option => $route)
                            @php
                                $isActive = request()->is(trim($route, '/')) || request()->is(trim($route, '/'). '/*');
                            @endphp
                            <li class="flex text-sm font-raleway items-center font-semibold">
                                <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white p-4 flex items-center text-dark font-serif {{ $isActive ? 'text-dark bg-white' : '' }} ">{{ $option }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    
    @livewire('components.controls.login') <!-- Aquí se incluye el componente del modal -->

</div>
