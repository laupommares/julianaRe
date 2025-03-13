<div class="mx-24 w-1/2 mb-4 text-dark mt-20 h-full">
    <div class="my-8">
        <a href="/dashboard/recipes/create"
        class="p-4 rounded-sm bg-blue text-white hover:bg-blue/70"
        wire:navigate>Agregar Receta</a>
    </div>
    <table>
        <thead class="">
            <tr>
                <th class="px-6 py-8 font-slab text-2xl">Recetas y tips para cocinar</th>
            </tr>
        </thead>
        <tbody class="flex flex-col gap-2">
            @foreach ($recipes as $recipe)
                <tr wire:key="{{$recipe->id}}" class="flex text-dark bg-white shadow-xl rounded-lg pb-2 justify-between">
                    <td class="px-6 py-3">
                        <div class="pb-2">{{$recipe->title}}</div>
                        <div class="font-light line-clamp-3 text-sm">{{$recipe->description}}</div>
                    </td>
                    <td class="flex flex-col gap-2 px-4 justify-center">
                        <a class="bg-blue hover:bg-blue/70 text-white p-2 rounded-md"
                        href="/dashboard/recipes/{{$recipe->id}}/edit"
                        wire:navigate>Editar</a>
                        <button class="bg-orange hover:bg-orange/70 text-dark p-2 rounded-md"
                        wire:click="delete({{$recipe->id}})"
                        wire:confirm="¿Estás segura que queres borrar este artículo?">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
