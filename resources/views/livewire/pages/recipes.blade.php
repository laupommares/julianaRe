
<div>
    @if($isPreview)
        <div class="h-[810px] bg-green flex items-center justify-center">
            <div class="bg-white h-[778px]"  style="width: calc(100% - 32px);">
                <div class="container flex items-center justify-center">
                    <div class="w-full flex flex-col justify-center items-center my-10 text-dark gap-8">
                        <h1 class="font-slab text-4xl">Recetas</h1>
                        <p class="text-base font-light leading-8 text-center">En esta sección encontrarás recetas fáciles, saludables y deliciosas, junto con prácticos tips de cocina para que disfrutes de una alimentación nutritiva y equilibrada en tu día a día. ¡Descubrí cómo preparar comidas que cuiden tu cuerpo sin perder sabor!</p>
                        <div class="grid grid-cols-3 gap-6">
                            <div class="mb-10 card card-compact w-[348px] h-[420px] shadow-xl">
                                <div class="h-[228px]">
                                    <figure class="relative">
                                        <img class="w-full object-cover" src="{{ asset('wafles.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
                                    <h2 class="card-title">Waffles</h2>
                                    <p class="text-base">Receta ideal para desayunos, meriendas y postres.</p>
                                    <a href="">
                                        <button class="bg-orange font-bold w-40 rounded-md h-12">Ver receta</button>
                                    </a>
                                </div>
                            </div>
                        
                            <div class="mb-10 card card-compact w-[348px] h-[420px] shadow-xl">
                                <div class="h-[228px]">
                                    <figure class="relative">
                                        <img class="w-full object-cover" src="{{ asset('wafles.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
                                    <h2 class="card-title">Waffles</h2>
                                    <p class="text-base">Receta ideal para desayunos, meriendas y postres.</p>
                                    <a href="">
                                        <button class="bg-orange font-bold w-40 rounded-md h-12">Ver receta</button>
                                    </a>
                                </div>
                            </div>
                        
                            <div class="mb-10 card card-compact w-[348px] h-[420px] shadow-xl">
                                <div class="h-[228px]">
                                    <figure class="relative">
                                        <img class="w-full object-cover" src="{{ asset('wafles.png') }}" alt="">
                                    </figure>
                                </div>
                                <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
                                    <h2 class="card-title">Waffles</h2>
                                    <p class="text-base">Receta ideal para desayunos, meriendas y postres.</p>
                                    <a href="">
                                        <button class="bg-orange font-bold w-40 rounded-md h-12">Ver receta</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>    
    @else
        <div class=" bg-blue flex items-center justify-center">
            <div class="bg-white h-full w-[calc(100%-80px)]">
                <div class="container my-32 flex flex-col gap-8">
                    <div class="flex flex-col gap-8 justify-center items-center">
                        <div class="w-full flex justify-center">
                            <h1 class="font-serif text-4xl text-dark">Recetas y tips para cocinar</h1>
                        </div>
                        <p class="leading-8 font-light text-base text-center text-dark">En esta sección, comparto algunas recetas, cosas que probé y te recomiendo, tips para cocinar y más. </p>
                    
                        <livewire:components.search.search type="recipes">
        
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>