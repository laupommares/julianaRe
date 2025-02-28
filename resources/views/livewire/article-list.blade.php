<div class="mx-24 w-1/2 mb-4 text-dark mt-20 h-screen">
    <div class="my-8">
        <a href="/dashboard/articles/create"
        class="p-4 rounded-sm bg-blue text-white hover:bg-blue/70"
        wire:navigate>Crear artículo</a>
    </div>
    <table>
        <thead class="">
            <tr>
                <th class="px-6 py-8 font-slab text-2xl">Artículos: Consejos y bienestar</th>
            </tr>
        </thead>
        <tbody class="flex flex-col gap-2">
            @foreach ($articles as $article)
                <tr wire:key="{{$article->id}}" class="flex text-dark bg-white shadow-xl rounded-lg pb-2">
                    <td class="px-6 py-3">
                        <div class="pb-2">{{$article->title}}</div>
                        <div class="font-light line-clamp-3 text-sm">{{$article->content}}</div>
                    </td>
                    <td class="flex flex-col gap-2 px-4 justify-center">
                        <button class="bg-blue hover:bg-blue/70 text-white p-2 rounded-md"
                        wire:click="delete({{$article->id}})"
                        wire:confirm="¿Estás segura que queres borrar este artículo?">Editar</button>
                        <button class="bg-orange hover:bg-orange/70 text-dark p-2 rounded-md"
                        wire:click="delete({{$article->id}})"
                        wire:confirm="¿Estás segura que queres borrar este artículo?">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
