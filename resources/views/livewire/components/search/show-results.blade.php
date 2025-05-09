<div>
    @if (count($results) == 0)
        <p class="text-center w-full mt-8 text-dark">No hay resultados para tu búsqueda.</p>
    @else
        <div class="mt-12 flex flex-col gap-12 mx-auto">
            <div class="mt-3 w-full">
                {{ $results->links() }}
            </div>
            <div class="flex flex-row flex-wrap gap-6 justify-center">
                @foreach ($results as $result)
                <livewire:components.card 
                :key="$result->id"
                :image="Storage::url($result->image)" 
                :title="$result->title"
                :description="Str::limit($result->description, 100)"
                :link="route($routeName, ['slug' => $result->slug])"
                :slug="$result->slug"
                :route="$routeName" 
                />
            @endforeach
            </div>
            <div class="mt-3">
                {{ $results->links() }}
            </div>
        </div>
    @endif
</div>
