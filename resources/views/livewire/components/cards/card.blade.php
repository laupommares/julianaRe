<div class="card card-compact h-[540px] w-[520px] shadow-xl bg-light-gray">
    <figure class="relative m-4">
        <img class="w-full object-cover h-[315px]" src="{{ $image }}" alt="{{ $title }}">
    </figure>
    <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
        <h2 class="card-title">{{ $title }}</h2>
        <p class="text-base">{{ $description }}</p>
        <a href="{{ route($route, ['slug' => $slug]) }}" wire:navigate>
            <x-button size="md" color="orange"> Leer Más </x-button>
        </a>
    </div>
</div>
