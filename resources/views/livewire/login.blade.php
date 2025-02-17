<div x-data="{ isOpen: false }" @open-login-modal.window="isOpen = true">
    <button @click="isOpen = true" style="display: none;">Open Modal</button>

    <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
        <div class="bg-white rounded-lg p-8 w-xl relative">
            <h2 class="text-xl font-bold text-dark-gray font-slab pb-6">Iniciar Sesión</h2>
            <button @click="isOpen = false" class="absolute top-8 right-8 text-dark text-xl">X</button>
            <form wire:submit.prevent="login" class="font-flex flex flex-col gap-4">
                <div class="">
                    <label for="login-email" class="block text-dark-gray pb-2">Correo electrónico</label>
                    <input type="email" id="login-email" class="border rounded w-full px-3 py-2 text-dark-gray border-blue !bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico" wire:model="email" required>
                </div>
                <div class="">
                    <label for="login-password" class="block text-dark-gray pb-2">Contraseña</label>
                    <input type="password" id="login-password" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu contraseña" wire:model="password"  required>
                </div>
                <button type="submit" class="w-full bg-blue text-white hover:bg-blue/80 rounded px-4 my-2 py-2 font-slab text-xl">Iniciar Sesión</button>
            </form>
            <p class="text-dark">¿Todavía no te registraste? Hacé clic <a href="#" @click.prevent="$dispatch('close-login-and-open-register')" class="font-bold ">acá</a> para registrar tu cuenta.</p>
        </div>
    </div>
    @livewire('register') 
</div>




