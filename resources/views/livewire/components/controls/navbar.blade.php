<div x-data="{ isOpen: false }">
    <nav class="w-full h-20 bg-green bg-opacity-80 fixed z-40">
        <div class="flex items-center justify-between container">
            <div class="flex">
                <a href="/">
                    <img src="{{ asset('logo.png') }}" class="w-20 h-20" alt="">
                </a>
                <ul class="flex space-x-4 m-6 max-lg:hidden">
                    @foreach ($menuOptions as $option => $route)
                        @php
                            $isActive = request()->is(trim($route, '/')) || request()->is(trim($route, '/'). '/*');
                        @endphp
                        <li class="flex text-sm font-raleway items-center font-semibold">
                            <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white rounded-md px-3 py-2 flex items-center text-dark font-serif {{ $isActive ? 'text-dark bg-white' : '' }} ">{{ $option }}</a>
                        </li>
                    @endforeach 
                </ul>
            </div>

            {{-- Menu responsive --}}
            <div class="max-lg:block lg:hidden">
                <button @click="isOpen = !isOpen">
                    <span class="material-symbols-outlined text-dark" style="font-size: 48px;">
                        menu
                    </span>
                </button>
                <div x-show="isOpen" class="absolute bg-green bg-opacity-80 top-20 right-0 h-auto w-4/5">
                    <ul class="flex flex-col">
                        @foreach ($menuOptions as $option => $route)
                            @php
                                $isActive = request()->is(trim($route, '/')) || request()->is(trim($route, '/'). '/*');
                            @endphp
                            <li class="flex text-sm font-raleway items-center font-semibold">
                                <a href="{{ url($route) }}" class="w-full text-base h-full hover:bg-white p-4 flex items-center text-dark font-serif {{ $isActive ? 'text-dark bg-white' : '' }} ">{{ $option }}</a>
                            </li>
                        @endforeach 
                    </ul>
                </div>

            </div>
        </div>
    </nav>
    
</div>
