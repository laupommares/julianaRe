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
            <label wire:dirty.class="text-orange" wire:target="form.title" for="title" class="block text-sm font-medium text-dark">
                Título <span wire:dirty wire:target="form.title" class="mb-2">*</span>
            </label>
            <input type="text" id="title" wire:model="form.title"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue">
            @error('title') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Descripción -->
        <div>
            <label wire:dirty.class="text-orange" wire:target="form.description" for="description" class="block text-sm font-medium text-dark">
                Descripción <span wire:dirty wire:target="form.description" class="mb-2">*</span>
            </label>
            <textarea id="description" wire:model="form.description"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue"
                rows="2"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Contenido -->
        <div>
            <label wire:dirty.class="text-orange" wire:target="form.content" for="content" class="block text-sm font-medium text-dark">
                Contenido <span wire:dirty wire:target="form.content" class="mb-2">*</span>
            </label>
            <textarea id="content" wire:model="form.content" wire:keyup="generateSlug"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue focus:border-blue"
                rows="4"></textarea>
            @error('content') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Imagen -->
        <div>
            <label wire:dirty.class="text-orange" wire:target="form.image" for="image" class="block text-sm font-medium text-dark">
                Imagen (opcional) <span wire:dirty wire:target="form.image" class="mb-2">*</span>
            </label>
            <input type="file" id="image" wire:model="image" class="block w-full text-dark pt-1">

            @if ($image)
            <img src="{{ $image->temporaryUrl() }}" class="mt-2 h-20 w-20 rounded">
        @elseif ($form->article && $form->article->image)
            <img src="{{ Storage::url($form->article->image) }}" class="mt-2 h-20 w-20 rounded">
        @endif
        
            @error('image') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3 text-dark">
            <label wire:dirty.class="text-orange" wire:target="form.published" class="flex items-center">
                <input type="checkbox" name="published"
                wire:model.boolean="form.published"
                class="mr-2">
                Publicar <span wire:dirty wire:target="form.published" class="mb-2">*</span>
            </label>
        </div>
        <div class="mb-3 text-dark">
            <div>
                <div wire:dirty.class="text-orange" wire:target="form.notifications" class="mb-2 font-semibold">
                    Opciones de notificación <span wire:dirty wire:target="form.notifications" class="mb-2">*</span>
                </div>
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
            class="w-full bg-blue text-white py-2 rounded-md shadow transition disabled:opacity-75 disabled:bg-blue/60 " 
            type="submit"
            wire:dirty.class="hover:bg-blue/70"
            wire:dirty.remove.attr="disabled"
            disabled>
            Guardar Artículo
        </button>
    </form>
</div>
