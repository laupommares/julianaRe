<div x-data="{ isOpen: false }" @open-login-modal.window="isOpen = true">
    <button @click="isOpen = true" style="display: none;">Open Modal</button>

    <div x-show="isOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-60">
        <div class="bg-white rounded-lg p-8 w-1/3 relative">
            <h2 class="text-xl font-bold text-dark-gray font-slab pb-6">Iniciar Sesión</h2>
            <button @click="isOpen = false" class="absolute top-6 right-6 text-dark text-xl hover:bg-blue/80 hover:text-white p-2 rounded-md">X</button>
            <form wire:submit.prevent="login" class="font-flex flex flex-col gap-4">
                <div class="">
                    <label for="login-email" class="block text-dark-gray">Correo electrónico</label>
                    <input type="email" id="login-email" class="border rounded  w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70 focus:outline-none focus:ring-2 focus:ring-blue focus:border-blue" placeholder="Ingresá tu correo electrónico" wire:model="email" required>
                </div>
                <div class="">
                    <label for="login-password" class="block text-dark-gray">Contraseña</label>
                    <input type="password" id="login-password" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70 focus:outline-none focus:ring-2 focus:ring-blue focus:border-blue" placeholder="Ingresá tu contraseña" wire:model="password"  required>
                </div>
                <div class="my-4">
                    <button type="submit" class="w-full bg-blue text-white h-10 hover:bg-blue/80 rounded px-4 font-slab text-xl">Iniciar Sesión</button>
                    @if (session()->has('error'))
                        <div class="text-alert bg-green-100 rounded flex items-center">
                            <span class="material-symbols-outlined text-lg font-bold align-middle pr-1">info</span>
                            <p class="text-sm">{{ session('error') }}</p>
                        </div>
                    @endif
                </div>
            </form>
            <p class="text-dark">¿Todavía no te registraste? Hacé clic <a href="#" @click.prevent="$dispatch('close-login-and-open-register')" class="font-bold inline-block transition-transform duration-200 hover:scale-110">acá</a> para registrar tu cuenta.</p>
        </div>
    </div>
    @livewire('components.controls.register') 
</div>




