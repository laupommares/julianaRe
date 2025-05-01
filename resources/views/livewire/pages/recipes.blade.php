<div>
    @if($isPreview)
    <div class="h-[810px] bg-green flex items-center justify-center">
        <div class="bg-white h-[778px]" style="width: calc(100% - 32px);">
            <div class="container">
                <div class="flex items-center justify-center">
                    <div class="w-full flex flex-col justify-center items-center my-10 text-dark gap-8">
                        <h1 class="font-slab text-4xl">Comé rico todos los días.</h1>
                        <p class="text-base font-light leading-8 text-center">
                            Descubrí recetas saludables, fáciles y sabrosas para sumar sabor, variedad y bienestar a tu
                            alimentación diaria.
                        </p>

                        <div class="carousel w-full">
                            @php
                            $chunks = $recipes->chunk(2); // Divide en grupos de 2
                            @endphp

                            @foreach ($chunks as $index => $pair)
                            <div id="slide{{ $index + 1 }}"
                                class="carousel-item relative w-full flex gap-4 justify-center">
                                @foreach ($pair as $recipe)
                                <livewire:components.cards.card :key="$recipe->id" :image="$recipe->image"
                                    :title="$recipe->title" :description="Str::limit($recipe->description, 100)"
                                    :link="route('recipes.show', ['slug' => $recipe->slug])" :slug="$recipe->slug"
                                    :route="'recipes.show'" />
                                @endforeach

                                <div
                                    class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                    <a href="#slide{{ $index == 0 ? count($chunks) : $index }}"
                                        class="btn bg-orange border-none">
                                        <span class="material-symbols-outlined text-dark"
                                            style="transform: scaleX(-1) scale(1.5, 1); font-size: 32px;">
                                            trending_flat
                                        </span>
                                    </a>
                                    <a href="#slide{{ ($index + 2) > count($chunks) ? 1 : ($index + 2) }}"
                                        class="btn bg-orange border-none">
                                        <span class="material-symbols-outlined scale-x-150 text-dark"
                                            style="font-size: 32px;">
                                            trending_flat
                                        </span>
                                    </a>
                                </div>
                            </div>
                            @endforeach
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
                    <p class="leading-8 font-light text-base text-center text-dark">En esta sección, comparto algunas
                        recetas, cosas que probé y te recomiendo, tips para cocinar y más. </p>

                    <livewire:components.search.search type="recipes">

                </div>
            </div>
        </div>
    </div>
    @endif
</div>