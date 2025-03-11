<div>
    @if (count($results) == 0)
        <p class="text-center w-full mt-8 text-dark">No hay resultados para tu búsqueda.</p>
    @else
        <div class="mt-12 grid grid-cols-1 lg:grid-cols-2 gap-12 mx-auto">
            @foreach ($results as $result)
            <livewire:components.cards.card 
            :key="$result->id"
            :image="Storage::url($result->image)" 
            :title="$result->title"
            :description="Str::limit($result->description, 100)"
            :link="route($routeName, ['slug' => $result->slug])"
            :slug="$result->slug"
            :route="$routeName" />
            @endforeach
        </div>
    @endif
</div>
