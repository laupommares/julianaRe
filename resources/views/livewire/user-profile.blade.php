<div class="container max-w-4xl mx-auto min-h-screen" x-data="{ editMode: false }">
    <h1 class="text-2xl font-slab text-dark mb-6 pt-32">Mi perfil</h1>

    <div class="bg-light-gray p-6 rounded-xl shadow-md">
        {{-- FOTO + NOMBRE --}}
        <div class="flex items-center gap-6 mb-6">
            <img src="{{ $photo ?? 'https://via.placeholder.com/100' }}" alt="Foto de perfil" class="w-24 h-24 rounded-full object-cover border-4 border-beige">
            <div>
                <h2 class="text-xl font-bold text-dark" x-text="editMode ? 'Editando perfil' : '{{ $name }} {{ $last_name }}'"></h2>
                <p class="text-dark-gray">{{ $email }}</p>
            </div>
        </div>

        {{-- VISTA LECTURA --}}
        <div x-show="!editMode" x-cloak class="grid grid-cols-1 md:grid-cols-2 gap-6 font-flex">
            <div>
                <p class="text-sm text-dark-gray mb-1">Nombre</p>
                <p class="text-dark text-lg">{{ $name }}</p>
            </div>
            <div>
                <p class="text-sm text-dark-gray mb-1">Apellido</p>
                <p class="text-dark text-lg">{{ $last_name }}</p>
            </div>
            <div class="md:col-span-2">
                <p class="text-sm text-dark-gray mb-1">Email</p>
                <p class="text-dark text-lg">{{ $email }}</p>
            </div>

            <div class="md:col-span-2 mt-6 flex justify-end">
                <button type="button" @click="editMode = true" class="bg-blue text-white px-4 py-2 rounded hover:bg-blue/80">Editar</button>
            </div>
        </div>

        {{-- MODO EDICIÓN --}}
        <form x-show="editMode" x-cloak wire:submit.prevent="save" class="grid grid-cols-1 md:grid-cols-2 gap-4 font-flex">
            <div>
                <label class="block text-dark-gray mb-1">Nombre</label>
                <input type="text" wire:model="name" class="w-full px-3 py-2 border rounded bg-white border-blue focus:outline-none focus:ring-2 focus:ring-blue">
            </div>
            <div>
                <label class="block text-dark-gray mb-1">Apellido</label>
                <input type="text" wire:model="last_name" class="w-full px-3 py-2 border rounded bg-white border-blue focus:outline-none focus:ring-2 focus:ring-blue">
            </div>
            <div class="md:col-span-2">
                <label class="block text-dark-gray mb-1">Email</label>
                <input type="email" wire:model="email" class="w-full px-3 py-2 border rounded bg-white border-blue focus:outline-none focus:ring-2 focus:ring-blue">
            </div>

            <div class="md:col-span-2 mt-6 flex justify-end gap-4">
                <button type="submit" class="bg-green text-white px-4 py-2 rounded hover:bg-green/80">Guardar</button>
                <button type="button" @click="editMode = false" class="bg-dark-gray text-white px-4 py-2 rounded hover:bg-dark-gray/80">Cancelar</button>
            </div>
        </form>
    </div>

    {{-- Citas próximas --}}
    <div class="mt-10 bg-white border border-light-gray p-6 rounded-xl shadow-sm">
        <h2 class="text-xl font-slab text-dark mb-4">Próximas citas</h2>
        @if (count($appointments) > 0)
            <ul class="space-y-3">
                @foreach ($appointments as $appointment)
                    <li class="flex justify-between text-dark-gray border-b border-light-gray pb-2">
                        <span>{{ \Carbon\Carbon::parse($appointment->date)->format('d/m/Y') }}</span>
                        <span>{{ $appointment->time }}</span>
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-medium-gray">No tenés citas agendadas.</p>
        @endif
    </div>
</div>
