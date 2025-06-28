<div class="mx-24 mt-24 max-w-2xl">
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-dark bg-green-100 rounded">
            {{ session('message') }}
        </div>
    @endif

    <div class="flex py-8 gap-2 text-dark-gray">
        <span class="material-symbols-outlined text-2xl font-bold align-middle">add_notes</span>
        <h1 class="text-2xl font-slab">{{ $model ==='article' ? 'Nuevo Artículo' : 'Nueva Receta' }}</h1>
    </div>

    <form 
        x-data="{ dirty: false }" 
        x-on:input.debounce="dirty = true"
        wire:submit="save" 
        class="space-y-4"
    >
        <!-- Título -->
        <div>
            <label for="title" class="block text-sm font-medium text-dark">Título</label>
            <input type="text" id="title" wire:model="form.title"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Descripción -->
        <div>
            <label for="description" class="block text-sm font-medium text-dark">Descripción</label>
            <textarea id="description" wire:model="form.description"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue"
                rows="2"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        @if ($model === 'recipe')
            <div>
                <label for="ingredients" class="block text-sm font-medium text-dark">Ingredientes</label>
                <textarea id="ingredients" wire:model="form.ingredients"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue"
                    rows="3"></textarea>
                @error('ingredients') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        @endif

        <!-- Contenido -->
        <div>
            <label for="content" class="block text-sm font-medium text-dark">{{ $model ==='article' ? 'Contenido' : 'Instrucciones' }}</label>
            <textarea id="content" wire:model="form.content" wire:keyup="generateSlug"
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
            @error('form.image') 
                <span class="text-red-500 text-sm">{{ $message }}</span> 
            @enderror
        
            </div>

        <div class="mb-3 text-dark">
            <label class="flex items-center">
                <input type="checkbox" name="published"
                wire:model.boolean="form.published"
                class="mr-2">
                Publicar
            </label>
        </div>
        <div class="mb-3 text-dark">
            <div>
                <div class="mb-2 font-semibold">Opciones de notificación</div>
                <div class="flex gap-6 mb-3">
                    <label class="flex items-center">
                        <input type="radio" value="true" class="mr-2"
                        wire:model.boolean="form.allowNotifications">
                        Si
                    </label>
                    <label class="flex items-center">
                        <input type="radio" value="false" class="mr-2"
                        wire:model.boolean="form.allowNotifications">
                        No
                    </label>
                </div>
                <div x-show="$wire.form.allowNotifications">
                    <label class="flex items-center">
                        <input type="checkbox" value="email" class="mr-2"
                        wire:model="form.notifications">
                        Email
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="sms" class="mr-2"
                        wire:model="form.notifications">
                        SMS
                    </label>
                    <label class="flex items-center">
                        <input type="checkbox" value="push" class="mr-2"
                        wire:model="form.notifications">
                        Push
                    </label>
                </div>
            </div>
        </div>

        <!-- Botón -->
        <button 
            class="w-full bg-blue text-white py-2 rounded-md shadow transition disabled:opacity-75 disabled:bg-blue/60"
            :class="{ 'hover:bg-blue/70': dirty }"
            :disabled="!dirty"
            type="submit"
        >
            Guardar {{ $model === 'article' ? 'Artículo' : 'Receta' }}
        </button>
    
    </form>
</div>
