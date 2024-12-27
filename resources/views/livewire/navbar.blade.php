<div>
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
                            <a href="{{ url($route) }}" class="w-full h-full hover:bg-white hover:text-green rounded-md px-3 py-2 flex items-center {{ $isActive ? 'text-green bg-white' : 'text-white' }} ">{{ $option }}</a>
                        </li>
                    @endforeach 
                </ul>
            </div>
            <div class="flex pr-16">
                <button type="button" @click="$dispatch('open-login-modal')" class="text-dark-gray hover:text-white">Iniciá Sesión/Registrate</button>
                
                {{-- <button type="button" class="relative h-12 w-12 m-2 bg-light-orange rounded-full inline-flex items-center justify-center text-white hover:bg-orange hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="material-symbols-outlined text-white">
                        notification_important
                    </span>
                </button>                
                <div x-data="{ isOpen: false }" class="relative inline-block text-left">
                    <div>
                        <button @click="isOpen = !isOpen" type="button" class="relative h-12 w-12 m-2 inline-flex rounded-full bg-green-dark text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-dark" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <img class="h-12 w-12 rounded-full" src="/juli.png" alt="">
                        </button>
                    </div>
                    <div x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                        <div x-data="{}" class="py-1" role="none">
                            <button type="button" @click="$dispatch('open-login-modal')" class="block w-full px-4 py-2 text-left text-sm text-green-dark hover:bg-orange hover:bg-opacity-50" role="menuitem" tabindex="-1" id="menu-item-0">Iniciar sesión</button>
                            <a href="#" @click.prevent="$dispatch('open-modal')" class="block w-full px-4 py-2 text-left text-sm text-green-dark hover:bg-orange hover:bg-opacity-50" role="menuitem" tabindex="-1" id="menu-item-3">
                                Registrate
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </nav>
       
    @livewire('login') <!-- Aquí se incluye el componente del modal -->

    <!-- Modal Registro -->
    <div x-data="{ isOpen: false }" @open-modal.window="isOpen = true" @close-login-and-open-register.window="isOpen = true">
        <button @click="isOpen = true" style="display: none;">Open Modal</button>

        <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
            <div class="bg-white rounded-lg p-6 w-1/3">
                <h2 class="text-lg font-bold mb-4 text-dark-gray">¡Registrate!</h2>
                <form>
                    <div class="mb-4">
                        <label for="name" class="block text-dark-gray">Nombre</label>
                        <input type="text" id="name" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu nombre" required>
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-dark-gray">Apellido</label>
                        <input type="text" id="apellido" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu apell" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-dark-gray">Correo electrónico</label>
                        <input type="email" id="email" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-dark-gray">Contraseña</label>
                        <input type="password" id="password" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu contraseña" required>
                    </div>
                    <div class="mb-4">
                        <label for="confirm-password" class="block text-dark-gray">Confirmar Contraseña</label>
                        <input type="password" id="confirm-password" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Reingresa tu contraseña" required>
                    </div>
                    <button type="submit" class="w-full bg-blue text-white hover:bg-blue/60 rounded px-4 py-2">Registrate</button>
                </form>
                <button @click="isOpen = false" class="mt-4 text-red-500">Cerrar</button>
            </div>
        </div>
    </div>
</div>
