<div class="mx-24 w-1/2 mb-4 text-dark mt-20 h-full">
    <div class="my-8 flex justify-between items-center">
        <a href="/dashboard/articles/create"
           class="p-4 rounded-sm bg-blue text-white hover:bg-blue/70"
           wire:navigate>Crear artículo</a>
        <div class="">
            <button class="p-2 rounded-md bg-light-gray"
                    wire:click="showAll()">Mostrar todo</button>
            <button class="p-2 rounded-md bg-light-gray"
                    wire:click="showPublished()">Artículos publicados (<livewire:admin.published-count placeholder-text="Cargando..." lazy>)</button>
        </div>
    </div>

    <div class="mt-3">
        {{$items->links()}} <!-- Aquí usamos 'items' en lugar de 'articles' -->
    </div>

    <table class="w-full">
        <thead class="">
            <tr>
                <th class="px-6 py-8 font-slab text-2xl">
                    {{ $modelClass == 'App\Models\Article' ? 'Artículos: Consejos y bienestar' : 'Recetas' }}
                </th>
            </tr>
        </thead>
        <tbody class="flex flex-col gap-2">
            @foreach ($items as $item)  <!-- Cambiado de $articles a $items -->
                <tr wire:key="{{$item->id}}" class="flex text-dark bg-white shadow-xl rounded-lg pb-2 justify-between">
                    <td class="px-6 py-3">
                        <div class="pb-2">{{$item->title}}</div>
                        <div class="font-light line-clamp-3 text-sm">{{$item->description}}</div>
                    </td>
                    <td class="flex flex-col gap-2 px-4 justify-center">
                        <a class="bg-blue hover:bg-blue/70 text-white p-2 rounded-md"
                           href="/dashboard/{{$modelClass == 'App\Models\Article' ? 'articles' : 'recipes'}}/{{$item->id}}/edit"
                           wire:navigate>Editar</a> <!-- Cambiar la ruta dependiendo del modelo -->
                        <button class="bg-orange hover:bg-orange/70 text-dark p-2 rounded-md"
                                wire:click="delete({{$item->id}})"
                                wire:confirm="¿Estás segura que queres borrar este artículo?">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-3">
        {{$items->links()}}  <!-- Aquí también usamos 'items' -->
    </div>
</div>
