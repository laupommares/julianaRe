<div class="mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px]">
    <form action="" class="flex justify-center">
        <div class="relative w-[420px] h-9">
            <input 
                type="text" 
                class="w-full h-full pl-3 pr-10 rounded-md border border-gray-300 focus:border-gray-500 focus:outline-none" 
                wire:model.live.debounce.500="searchText"
                placeholder="Buscar...">
                <button class="absolute bg-dark rounded-r-md h-9 w-10 right-0 top-0 flex items-center justify-center"
                    wire:click.prevent="clear()">
                    <span class="material-symbols-outlined absolute  text-white text-xl">
                        {{ $searchText ? 'close' : 'search' }}
                    </span>
                </button>
        </div>
    </form>
    <div class="mt-8 flex flex-row flex-wrap gap-8 relative">
        @foreach ($results as $result)
            <div class="mb-10 card card-compact max-w-[580px] min-h-[420px] shadow-xl bg-light-gray">
                <figure class="relative m-4">
                    <img class="w-full object-cover h-[315px]" src="{{ $result->image }}" alt="{{ $result->title }}">
                </figure>
                <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
                    <h2 class="card-title">{{ $result->title }}</h2>
                    <p class="text-base">{{ $result->description }}</p>
                    <a href="{{ $result->link }}">
                        <button class="bg-orange font-bold w-40 rounded-md h-12">Ver más</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>