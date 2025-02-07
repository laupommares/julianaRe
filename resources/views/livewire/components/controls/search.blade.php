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

    <div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
        @foreach ($results as $result)
            <livewire:components.cards.card 
                :image="$result->image"
                :title="$result->title"
                :description="$result->description"
                :link="$result->link"
            />
        @endforeach
    
    </div>
    
</div>