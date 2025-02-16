<div class="mt-8 grid grid-cols-1 lg:grid-cols-2 gap-8">
    @foreach ($results as $result)
        <livewire:components.cards.card 
            :key="$result->id"  {{-- Agrega un key único para evitar caché --}}
            :image="$result->image"
            :title="$result->title"
            :description="$result->description"
            :link="$result->link"
        />
    @endforeach
</div>
