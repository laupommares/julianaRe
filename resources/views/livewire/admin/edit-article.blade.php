<div class="mx-24 mt-24 max-w-2xl">
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-dark bg-green-100 rounded">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex py-8 gap-2 text-dark-gray">
        <span class="material-symbols-outlined text-2xl font-bold align-middle">add_notes</span>
        <h1 class="text-2xl font-slab">Editar artículo</h1>
    </div>

    <form wire:submit="save" class="space-y-4">
        <!-- Título -->
        <div>
            <label for="title" class="block text-sm font-medium text-dark">Título</label>
            <input type="text" id="title" wire:model="title"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Descripción -->
        <div>
            <label for="description" class="block text-sm font-medium text-dark">Descripción</label>
            <textarea id="description" wire:model="description"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue"
                rows="2"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Contenido -->
        <div>
            <label for="content" class="block text-sm font-medium text-dark">Contenido</label>
            <textarea id="content" wire:model="content" wire:keyup="generateSlug"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue"
                rows="4"></textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Imagen -->
        <div>
            <label for="image" class="block text-sm font-medium text-dark">Imagen (opcional)</label>
            <input type="file" id="image" wire:model="image" class="block w-full text-dark pt-1">
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" class="mt-2 h-20 w-20 rounded">
            @endif
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Botón -->
        <button type="submit"
            class="w-full bg-blue text-white py-2 rounded-md shadow hover:bg-blue/70 transition">
            Guardar Artículo
        </button>
    </form>
</div>
