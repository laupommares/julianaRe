<div>
    @if ($isPreview)
    <div class="h-auto bg-blue flex items-center justify-center">
        <div class="bg-white my-4 w-[calc(100%-32px)]">
            <div class="container flex items-center justify-center">
                <div class="bg-white h-[746px] w-full relative flex flex-col text-dark my-16">
                    <div class="w-full flex justify-center">
                        <h1 class="font-slab text-4xl text-center mb-16">Consejos y bienestar</h1>
                    </div>
                    <div class="flex flex-row gap-8">
                        <div x-data="{ current: 0, total: {{ $articles->count() }} }" class="flex flex-col items-center">
                            <!-- Iterar sobre los artículos, mostrar solo el artículo actual -->
                            @foreach ($articles as $index => $result)
                                <div x-show="current === {{ $index }}" class="transition-opacity duration-500">
                                    <livewire:components.cards.card 
                                        :image="$result->image"
                                        :title="$result->title"
                                        :description="$result->description"
                                        :link="$result->link"
                                        :slug="$result->slug" 
                                        route="blog.show"
                                    />
                                </div>
                            @endforeach
                        
                            <!-- Botones de navegación -->
                            <div class="flex gap-4 justify-center mt-4">
                                <button @click="current = (current > 0) ? current - 1 : total - 1" class="px-4 py-2 text-black disabled:opacity-50">
                                    <span class="material-symbols-outlined" style="transform: scaleX(-1) scale(1.5, 1); font-size: 32px;">
                                        trending_flat
                                    </span>
                                </button>
                        
                                <button @click="current = (current < total - 1) ? current + 1 : 0" class="px-4 py-2 text-black disabled:opacity-50">
                                    <span class="material-symbols-outlined scale-x-150" style="font-size: 32px;">
                                        trending_flat
                                    </span>  
                                </button>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-8 mt-6">
                            <p class="leading-8 font-light text-base">
                                En esta sección, comparto artículos, consejos y recursos sobre nutrición y bienestar 
                                que considero fundamentales para ayudarte a lograr un estilo de vida más saludable y equilibrado. 
                                ¡Todo lo que necesitas para sentirte mejor!
                            </p>
                            <a href="/blog" class="font-bold underline">Accedé al Blog con todos los artículos</a>
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
                        <h1 class="font-serif text-4xl text-dark">Consejos y bienestar</h1>
                    </div>
                    <p class="leading-8 font-light text-base text-center text-dark">En esta sección, comparto artículos, consejos y recursos sobre nutrición y bienestar que considero fundamentales para ayudarte a lograr un estilo de vida más saludable y equilibrado. ¡Todo lo que necesitas para sentirte mejor!</p>
                   
                    <livewire:components.search.search type="articles" />
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
