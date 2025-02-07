<div>
    <form action="">
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
    <div class="mt-4">
        @foreach ($results as $result)
            <div class="pt-2">
                <a href="">{{$result->title}}</a>
            </div>
        @endforeach
    </div>
</div>