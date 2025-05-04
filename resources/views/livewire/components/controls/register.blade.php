    <div x-data="{ isOpen: false }" @open-modal.window="isOpen = true" @close-login-and-open-register.window="isOpen = true">
        <button @click="isOpen = true" style="display: none;">Open Modal</button>

        <div x-show="isOpen" class="fixed inset-0 z-50 w-full bg-black bg-opacity-60 flex justify-center items-center">
            <div class="bg-white rounded-lg p-8 relative w-1/3">
                <h2 class="text-xl font-bold pb-6 text-dark-gray font-slab">¡Registrate!</h2>
                <button @click="isOpen = false" class="absolute top-6 right-6 text-dark text-xl hover:bg-blue/80 hover:text-white p-2 rounded-md">X</button>
                <form wire:submit.prevent="register" class="font-flex flex flex-col gap-4">
                    <div class="text-dark-gray">
                        <label for="name" class="block">Nombre</label>
                        <input type="text" id="name" wire:model="name" class="border rounded w-full px-3 py-2 border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu nombre">
                        @error('name')
                            <div class="text-alert flex items-center">
                                <span class="material-symbols-outlined text-lg font-bold align-middle pr-1">info</span>
                                <p class="text-sm">{{ $message }}</p>  <!-- Estilos agregados -->
                            </div>
                        @enderror
                    </div>
                    <div class="text-dark-gray">
                        <label for="name" class="block">Apellido</label>
                        <input type="text" id="apellido" wire:model="last_name" class="border rounded w-full px-3 py-2 border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu apellido">
                        @error('last_name')
                            <div class="text-alert flex items-center">
                                <span class="material-symbols-outlined text-lg font-bold align-middle pr-1">info</span>
                                <p class="text-sm">{{ $message }}</p>  <!-- Estilos agregados -->
                            </div>
                        @enderror
                    </div>
                    <div class="text-dark-gray">
                        <label for="email" class="block">Correo electrónico</label>
                        <input type="email" id="email" wire:model="email" class="border rounded w-full px-3 py-2 border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico">
                        @error('email')
                        <div class="text-alert flex items-center">
                            <span class="material-symbols-outlined text-lg font-bold align-middle pr-1">info</span>
                            <p class="text-sm">{{ $message }}</p>  <!-- Estilos agregados -->
                        </div>
                        @enderror
                    </div>
                    <div class="text-dark-gray">
                        <label for="password" class="block">Contraseña</label>
                        <input type="password" id="password" wire:model="password" class="border rounded w-full px-3 py-2 border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu contraseña">
                        @error('password')
                        <div class="text-alert flex items-center">
                            <span class="material-symbols-outlined text-lg font-bold align-middle pr-1">info</span>
                            <p class="text-sm">{{ $message }}</p>  <!-- Estilos agregados -->
                        </div>
                        @enderror
                    </div>
                    <div class="text-dark-gray">
                        <label for="password" class="block">Volvé a ingresar tu contraseña</label>
                        <input type="password" id="confirm-password" wire:model="password_confirmation" class="border rounded w-full px-3 py-2 border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Reingresa tu contraseña">
                        @error('confirm-password')
                        <div class="text-alert flex items-center">
                            <span class="material-symbols-outlined text-lg font-bold align-middle pr-1">info</span>
                            <p class="text-sm">{{ $message }}</p>  <!-- Estilos agregados -->
                        </div>
                    @enderror
                    </div>
                    <button type="submit" class="w-full bg-blue text-white hover:bg-blue/80 rounded px-4 py-2 text-xl">Registrate</button>
                </form>
            </div>
        </div>
    </div>