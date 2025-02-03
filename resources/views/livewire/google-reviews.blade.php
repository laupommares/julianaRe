@php
    // Separar la review de 4 estrellas
    $fourStarReview = collect($reviews)->firstWhere('rating', 4);
    $otherReviews = collect($reviews)->reject(function ($review) {
        return $review['rating'] === 4;
    })->values();

    // Combinar: reviews 1 y 2 al inicio, luego el resto, dejando la de 4 estrellas al final
    $orderedReviews = $otherReviews->take(2)
        ->merge($otherReviews->slice(2))
        ->push($fourStarReview)
        ->filter() // Eliminar null si no hay review de 4 estrellas
        ->values();
@endphp

<section class="bg-[#B3B3B3] bg-opacity-60 text-black" 
         x-data="{ currentPage: 0, reviewsPerPage: 2 }">
    <div class="mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] py-16 ">
        <div class="pb-8 w-full flex items-center justify-center">
            <h1 class="font-serif text-4xl">Valoraciones y Testimonios de mis pacientes</h1>
        </div>
        <div class="container mx-auto">
            <div class="flex flex-basis mb-8 gap-3">
                <img class="h-20 w-20 rounded-full" src="/juli.png" alt="">
                <div class="flex flex-col gap-2">
                    <p class="pt-1.5 font-semibold">Juliana Re</p>
                    <div class="flex gap-2">
                        <p class="font-semibold">{{ number_format($averageRating, 1) }} / 5</p>
                        <!-- Mostrar las estrellas correspondientes a la calificación promedio -->
                        <div class="flex space-x-1">
                            @for ($i = 0; $i < floor($averageRating); $i++) 
                                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                                </svg>
                            @endfor

                            <!-- Agregar la estrella vacía si el rating no es un número entero -->
                            @if ($averageRating - floor($averageRating) >= 0.5)
                                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                                </svg>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row gap-8 mb-16 justify-between">
            @foreach ($orderedReviews as $index => $review)
            <div class="bg-white w-[620px] min-h-[280px] p-6 shadow rounded-lg"
            x-show="Math.floor({{ $index }} / reviewsPerPage) === currentPage">
       
                    <div class="flex items-center mb-6">
                        <img src="{{ $review['profile_photo_url'] }}" 
                             alt="{{ $review['author_name'] }}" 
                             class="w-12 h-12 rounded-full mr-3">
                        <div>
                            <p class="font-semibold">{{ $review['author_name'] }}</p>
                            <p class="text-sm text-gray-500">{{ $review['relative_time_description'] }}</p>
                            <div class="flex space-x-1 mt-1">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-700 text-sm">{{ $review['text'] }}</p>
                </div>
            @endforeach
        </div>

        <!-- Controles de paginación -->
        <div class="flex justify-center items-center space-x-4">
            <button 
                @click="if (currentPage > 0) currentPage--" 
                :disabled="currentPage === 0"
                class="px-4 py-2 bg-gray-300 text-black disabled:opacity-50"
            >
                <span class="material-symbols-outlined" style="transform: scaleX(-1) scale(1.5, 1); font-size: 32px;">
                    trending_flat
                </span>
            </button>
            <button 
                @click="if (currentPage < Math.ceil({{ count($orderedReviews) }} / reviewsPerPage) - 1) currentPage++" 
                :disabled="currentPage === Math.ceil({{ count($orderedReviews) }} / reviewsPerPage) - 1"
                class="px-4 py-2 bg-gray-300 text-black disabled:opacity-50"
            >
                <span class="material-symbols-outlined scale-x-150" style="font-size: 32px;">
                    trending_flat
                </span>
            </button>
        </div>
        
    </div>
</section>
