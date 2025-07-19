<div class="min-h-screen flex items-center justify-center bg-[#F5F6F8] px-4">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-8 relative">
        <h2 class="text-2xl font-bold text-dark-gray font-slab pb-4">Iniciar Sesión</h2>

        <form wire:submit.prevent="login" class="font-flex flex flex-col gap-5">
            <!-- Email -->
            <div>
                <label for="login-email" class="block text-dark-gray text-sm mb-1">Correo electrónico</label>
                <input type="email" id="login-email" wire:model="email" required
                       class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70 focus:outline-none focus:ring-2 focus:ring-blue focus:border-blue"
                       placeholder="Ingresá tu correo electrónico">
            </div>

            <!-- Password -->
            <div>
                <label for="login-password" class="block text-dark-gray text-sm mb-1">Contraseña</label>
                <input type="password" id="login-password" wire:model="password" required
                       class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70 focus:outline-none focus:ring-2 focus:ring-blue focus:border-blue"
                       placeholder="Ingresá tu contraseña">
            </div>

            <!-- Botón -->
            <div class="mt-2">
                <button type="submit"
                        class="w-full bg-blue text-white h-10 hover:bg-blue/80 rounded px-4 font-slab text-xl">
                    Iniciar Sesión
                </button>
            </div>

            <!-- Errores -->
            @if (session()->has('error'))
                <div class="text-alert bg-green-100 rounded flex items-center p-2 gap-2">
                    <span class="material-symbols-outlined text-lg font-bold align-middle">info</span>
                    <p class="text-sm">{{ session('error') }}</p>
                </div>
            @endif
        </form>

        <!-- Link de registro -->
        <p class="mt-6 text-sm text-dark">
            ¿Todavía no tenés cuenta?
            <a href="#" wire:click.prevent="$dispatch('open-register-modal')" class="font-bold text-blue hover:underline">
                Registrate acá
            </a>
        </p>
    </div>
</div>


