<div class="container lg:px-0 h-auto py-32 text-dark px-10">
    <h1 class="text-3xl font-bold">{{ $result->title }}</h1>
    <p class="text-gray-500">Publicado el  {{ $result->created_at ? $result->created_at->format('d/m/Y') : 'Fecha no disponible' }}</p>

    <div class="flex flex-col gap-6 my-6">
        <img src="{{$result->image}}" alt="" class="w-[620px]">
        <p>{!! nl2br(e($result->content)) !!}</p>
        <p>{!! nl2br(e($result->ingredients)) !!}</p>
        <p>{!! nl2br(e($result->instructions)) !!}</p>
    </div>
    <button wire:navigate class="text-blue-500 underline" onclick="window.history.back();">
        Volver
    </button>
</div>
