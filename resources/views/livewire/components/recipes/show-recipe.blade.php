<div class="container mx-auto px-4 lg:px-0 h-screen py-32 text-dark">
    <h1 class="text-3xl font-bold">{{ $recipe->title }}</h1>
    <p class="text-gray-500 mt-2">Publicado el {{ $recipe->created_at->format('d/m/Y') }}</p>

    <div class="mt-6">
        {!! nl2br(e($recipe->ingredients)) !!}
    </div>
    
    <p>{{$recipe->instructions}} </p>

    <button wire:navigate class="mt-6 text-blue-500 underline" onclick="window.history.back();">
        Volver al blog
    </button>
</div>
