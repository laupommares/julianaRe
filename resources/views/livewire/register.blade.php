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