<div class="m-auto w-1/2 mb-4 text-dark">
    <table>
        <thead class="text-xs uppercase">
            <tr>
                <th class="px-6 py-3">Title</th>
                <th class="px-6 py-3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr wire:key="{{$article->id}}" class="border-b bg-gray-300 border-gray-700">
                    <td class="px-6 py-3">{{$article->title}} </td>
                    <td class="px-6 py-3">
                        <button class="bg-red-700 hover:bg-red-800 text-gray-200 p-2"
                        wire:click="delete({{$article->id}})"
                        wire:confirm="¿Estás segura que queres borrar este artículo?">Borrar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
