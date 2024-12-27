<div x-data="{ isOpen: false }" @open-user-profile-modal.window="isOpen = true">
    <!-- Modal de perfil -->
    <div x-show="isOpen" 
         x-transition
         class="fixed inset-0 flex items-center justify-center z-50 bg-gray-500 bg-opacity-50">
        <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
            <!-- Contenido del Modal -->
            <div class="flex justify-between items-center">
                <h2 class="text-lg font-semibold text-green-dark">Perfil de Usuario</h2>
                <button @click="isOpen = false" class="text-red-500 font-bold">X</button>
            </div>
            <div class="mt-4">
                @if(auth()->check())
                    <p><strong>Nombre:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <!-- Foto de perfil -->
                    <div class="mt-4">
                        <img src="{{ auth()->user()->profile_photo_url }}" alt="Foto de perfil" class="h-24 w-24 rounded-full mx-auto">
                    </div>
                @else
                    <p>Por favor, inicie sesión para ver su perfil.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    Livewire.on('open-profile-modal', () => {
        @this.open(); // Abre el modal desde Livewire
    });
</script>
