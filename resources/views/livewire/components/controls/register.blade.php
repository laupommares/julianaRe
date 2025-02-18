    <div x-data="{ isOpen: false }" @open-modal.window="isOpen = true" @close-login-and-open-register.window="isOpen = true">
        <button @click="isOpen = true" style="display: none;">Open Modal</button>

        <div x-show="isOpen" class="fixed inset-0 z-50 w-full bg-black bg-opacity-60 flex justify-center items-center">
            <div class="bg-white rounded-lg p-8 relative w-1/3">
                <h2 class="text-xl font-bold pb-6 text-dark-gray font-slab">¡Registrate!</h2>
                <button @click="isOpen = false" class="absolute top-6 right-6 text-dark text-xl hover:bg-blue/80 hover:text-white p-2 rounded-md">X</button>
                <form wire:submit.prevent="register" class="font-flex  flex flex-col gap-4">
                    <div class="">
                        <label for="name" class="block text-dark-gray pb-2">Nombre</label>
                        <input type="text" id="name" wire:model="name" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu nombre">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>  <!-- Estilos agregados -->
                        @enderror
                    </div>
                    <div class="">
                        <label for="name" class="block text-dark-gray pb-2">Apellido</label>
                        <input type="text" id="apellido" wire:model="last_name" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu apellido">
                        @error('last_name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>  <!-- Estilos agregados -->
                        @enderror
                    </div>
                    <div class="">
                        <label for="email" class="block text-dark-gray pb-2">Correo electrónico</label>
                        <input type="email" id="email" wire:model="email" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>  <!-- Estilos agregados -->
                        @enderror
                    </div>
                    <div class="">
                        <label for="password" class="block text-dark-gray pb-2">Contraseña</label>
                        <input type="password" id="password" wire:model="password" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu contraseña">
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>  <!-- Estilos agregados -->
                        @enderror
                    </div>
                    <div class="">
                        <label for="password" class="block text-dark-gray pb-2">Volvé a ingresar tu contraseña</label>
                        <input type="password" id="confirm-password" wire:model="password_confirmation" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Reingresa tu contraseña">
                        @error('confirm-password')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>  <!-- Estilos agregados -->
                    @enderror
                    </div>
                    <button type="submit" class="w-full bg-blue text-white hover:bg-blue/80 rounded px-4 py-2 text-xl">Registrate</button>
                </form>
            </div>
        </div>
    </div>