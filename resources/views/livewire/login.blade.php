<div x-data="{ isOpen: false }" @open-login-modal.window="isOpen = true">
    <button @click="isOpen = true" style="display: none;">Open Modal</button>

    <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
        <div class="bg-white rounded-lg p-6 w-1/3">
            <h2 class="text-lg font-bold mb-4 text-dark-gray">Iniciar Sesión</h2>
            <form>
                <div class="mb-4">
                    <label for="login-email" class="block text-dark-gray">Correo electrónico</label>
                    <input type="email" id="login-email" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico" wire:model="email" required>
                </div>
                <div class="mb-4">
                    <label for="login-password" class="block text-dark-gray">Contraseña</label>
                    <input type="password" id="login-password" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu contraseña" wire:model="password"  required>
                </div>
                <button type="submit" class="w-full bg-blue text-white hover:bg-blue/60 rounded px-4 py-2">Iniciar Sesión</button>
            </form>
            <p class="text-dark-gray ">¿Todavía no te registraste? Hacé clic <a href="#" @click.prevent="$dispatch('close-login-and-open-register')" class="font-bold ">acá</a> para registrar tu cuenta.</p>
            <button @click="isOpen = false" class="mt-4 text-red-500">Cerrar</button>
        </div>
    </div>
</div>