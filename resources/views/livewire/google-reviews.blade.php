<div class="p-6 bg-white shadow rounded-md">
    <h2 class="text-xl font-bold mb-4">Reseñas de Google</h2>

    @if ($errorMessage)
        <p class="text-red-500">{{ $errorMessage }}</p>
    @elseif (count($reviews) > 0)
        <div class="space-y-4">
            @foreach ($reviews as $review)
                <div class="border-b pb-4">
                    <div class="flex items-center mb-2">
                        <img src="{{ $review['profile_photo_url'] }}" alt="{{ $review['author_name'] }}"
                             class="w-10 h-10 rounded-full mr-4">
                        <div>
                            <p class="text-lg font-medium">{{ $review['author_name'] }}</p>
                            <p class="text-sm text-gray-500">{{ $review['relative_time_description'] }}</p>
                        </div>
                    </div>
                    <p class="text-gray-700">{{ $review['text'] }}</p>
                    <div class="mt-2">
                        @for ($i = 0; $i < $review['rating']; $i++)
                            <svg class="inline-block w-4 h-4 text-yellow-500" fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                            </svg>
                        @endfor
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-gray-500">No hay reseñas disponibles.</p>
    @endif
    <div class="bg-white relative w-full h-3/4 flex justify-center items-center">
        <div class="h-[380px] absolute w-1/2 bg-blue p-10">

        </div>
    </div>
</div>
