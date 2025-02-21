<div class="card card-compact h-[540px] shadow-xl bg-light-gray">
    <figure class="relative m-4">
        <img class="w-full object-cover h-[315px]" src="{{ $image }}" alt="{{ $title }}">
    </figure>
    <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
        <h2 class="card-title">{{ $title }}</h2>
        <p class="text-base">{{ $description }}</p>
        <a href="{{ route('blog.show', ['slug' => $slug]) }}" wire:navigate>
            <button class="bg-blue-500 text-white px-4 py-2 mt-4 rounded">
                Leer más
            </button>
        </a>
    </div>
</div>
