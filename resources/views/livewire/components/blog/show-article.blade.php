<div class="container mx-auto my-10 px-4 lg:px-0">
    <h1 class="text-4xl font-bold">{{ $article->title }}</h1>
    <p class="text-gray-500 mt-2">Publicado el {{ $article->created_at->format('d/m/Y') }}</p>

    <div class="mt-6">
        {!! nl2br(e($article->content)) !!}
    </div>

    <button wire:navigate class="mt-6 text-blue-500 underline" onclick="window.history.back();">
        Volver al blog
    </button>
</div>
