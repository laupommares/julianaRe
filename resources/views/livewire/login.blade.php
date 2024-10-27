<div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-2xl font-bold mb-6">Iniciar Sesión</h2>
    
    <form wire:submit.prevent="login">
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
            <input type="email" id="email" wire:model="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
            <input type="password" id="password" wire:model="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500" required>
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition duration-200">Iniciar Sesión</button>
    </form>

    <div class="mt-4 text-sm">
        <p>¿No tienes una cuenta? <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Regístrate</a></p>
    </div>

    @if (session()->has('error'))
        <div class="mt-4 text-red-500 text-sm">
            {{ session('error') }}
        </div>
    @endif
</div>
