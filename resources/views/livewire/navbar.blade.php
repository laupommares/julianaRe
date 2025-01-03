<div x-data="{ isOpen: false }">
    <nav class="w-full h-20 bg-green bg-opacity-80 fixed z-40">
        <div class="flex items-center justify-between">
            <div class="flex">
                <img src="{{ asset('logo.png') }}" class="ml-16 w-20 h-20" alt="">
                <ul class="flex space-x-4 m-6">
                    @foreach ($menuOptions as $option => $route)
                        @php
                            $isActive = request()->is(trim($route, '/')) || request()->is(trim($route, '/'). '/*');
                        @endphp
                        <li class="flex text-sm font-raleway items-center font-semibold">
                            <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white rounded-md px-3 py-2 flex items-center text-dark {{ $isActive ? 'text-dark bg-white' : '' }} ">{{ $option }}</a>
                        </li>
                    @endforeach 
                </ul>
            </div>
            <div class="flex pr-16">
                @if ($isAuthenticated)
                <button type="button" class="relative h-12 w-12 m-2 bg-light-orange rounded-full inline-flex items-center justify-center text-white hover:bg-orange hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="material-symbols-outlined text-white">
                        notification_important
                    </span>
                </button>   
                    <!-- Botón de usuario con desplegable -->
                    <li @click="isOpen = !isOpen" type="button" class="flex text-sm font-raleway items-center font-semibold">
                        <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white rounded-md px-3 py-2 flex items-center text-dark {{ $isActive ? 'text-dark bg-white' : '' }} ">{{ $option }}</a>
                    </li>
                    <button @click="isOpen = !isOpen" type="button" class="relative h-12 w-12 m-2 inline-flex rounded-full bg-green-dark text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-dark" aria-expanded="false" aria-haspopup="true">
                        <img class="h-12 w-12 rounded-full" src="/juli.png" alt=""> <!-- Aquí puedes colocar la foto del usuario -->
                    </button>

                    <!-- Menú desplegable -->
                    <div x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                        <div class="py-1">
                            <!-- Opción de Perfil -->
                            <button @click="$dispatch('open-user-profile-modal')"  class="block px-4 py-2 text-sm text-green-dark hover:bg-gray-100">Perfil</button>
                            <!-- Opción de Cerrar sesión -->
                            <form method="POST" action="{{ route('logout') }}" class="block px-4 py-2 text-sm text-green-dark hover:bg-gray-100">
                                @csrf
                                <button type="submit" class="w-full text-left">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Mostrar el botón de inicio de sesión/registro cuando no está autenticado -->
                    <li type="button" @click="$dispatch('open-login-modal')" class="flex text-sm font-raleway items-center font-semibold">
                        <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white rounded-md px-3 py-2 flex items-center text-dark {{ $isActive ? 'text-dark bg-white' : '' }} ">Iniciá Sesión/Registrate</a>
                    </li>
                @endif
            </div>
        </div>
    </nav>
    
    @livewire('login') <!-- Aquí se incluye el componente del modal -->
    @livewire('user-profile')
</div>
