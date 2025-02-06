<div>
    <form action="">
        <div class="relative w-[420px] h-9">
            <input 
                type="text" 
                class="w-full h-full pl-3 pr-10 rounded-md  border border-gray-300 focus:border-gray-500 focus:outline-none" 
                wire:model.live.debounce="searchText"
                placeholder="Buscar...">
            <span class="bg-dark material-symbols-outlined  h-9 w-10 absolute right-0 top-0 flex items-center justify-center text-white text-xl">
                search
            </span>
        </div>
    </form>
    <div class="mt-4">
        @foreach ($results as $result)
            {{$result->title}}
        @endforeach
    </div>
</div>