<div class="ml-24 w-1/2 mb-4 text-dark mt-20">
    <div class="my-8">
        <a href="/dashboard/articles/create"
        class="p-4 rounded-sm bg-green hover:bg-green/70 font-semibold"
        wire:navigate>Agregar artículo</a>
    </div>
    <table>
        <thead class="">
            <tr>
                <th class="px-6 py-8 font-slab text-xl">Artículos: Consejos y bienestar</th>
            </tr>
        </thead>
        <tbody class="flex flex-col gap-2">
            @foreach ($articles as $article)
                <tr wire:key="{{$article->id}}" class="flex border-b bg-white shadow-xl rounded-lg pb-2">
                    <td class="px-6 py-3">
                        <div class="font-semibold pb-2">{{$article->title}}</div>
                        <div class="font-light line-clamp-3">{{$article->content}}</div>
                    </td>
                    <td class="flex flex-col gap-2 px-4 justify-center">
                        <button class="bg-green hover:bg-green/70 text-dark p-2 rounded-md"
                        wire:click="delete({{$article->id}})"
                        wire:confirm="¿Estás segura que queres borrar este artículo?">Editar</button>
                        <button class="bg-red-600 hover:bg-red-400 text-gray-200 p-2 rounded-md"
                        wire:click="delete({{$article->id}})"
                        wire:confirm="¿Estás segura que queres borrar este artículo?">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
