
{{--  --}}
    <section class="bg-gradient-to-b from-[#B3B3B3] to-[#FFFFFF] text-black">
        <div class="mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px]">
            <div class="py-16 w-full flex items-center justify-center">
                <h1 class="font-serif">Valoraciones y Testionios de mis pacientes</h1>
            </div>
            <div class="container mx-auto">
                <div class="flex flex-basis mb-8">
                    <img class="h-16 w-16 mt-1 rounded-full" src="/juli.png" alt="">
                    <div>
                        <p class=" pt-3 pl-2 font-semibold">Juliana Re</p>
                        <div class="flex">
                            <p class="px-2 font-semibold">{{ number_format($averageRating, 1) }} / 5</p>
                            <!-- Mostrar las estrellas correspon
                                dientes a la calificación promedio -->
                            <div class="flex space-x-1">
                                @for ($i = 0; $i < floor($averageRating); $i++) 
                                    <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                                    </svg>
                                @endfor

                                <!-- Agregar la estrella vacía si el rating no es un número entero -->
                                @if ($averageRating - floor($averageRating) >= 0.5)
                                    <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                                    </svg>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="w-full text-right pb-8">Ver todas las reseñas</p>
            <div class="flex w-full mx-auto mb-16">
                @if (isset($reviews[1]) && isset($reviews[2]))
                    @foreach ([1, 2] as $index)
                        <div class="bg-white w-[538px] h-[280px] mx-auto p-4 shadow rounded-lg">
                            <div class="flex items-center mb-4">
                                <!-- Imagen del autor -->
                                <img src="{{ $reviews[$index]['profile_photo_url'] }}" 
                                     alt="{{ $reviews[$index]['author_name'] }}" 
                                     class="w-12 h-12 rounded-full mr-3">
                                
                                <div>
                                    <!-- Nombre del autor -->
                                    <p class="font-semibold">{{ $reviews[$index]['author_name'] }}</p>
                                    <p class="text-sm text-gray-500">{{ $reviews[$index]['relative_time_description'] }}</p>
            
                                    <!-- Estrellas de la calificación -->
                                    <div class="flex space-x-1 mt-1">
                                        @for ($i = 0; $i < $reviews[$index]['rating']; $i++)
                                            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.967a1 1 0 00.95.69h4.191c.969 0 1.371 1.24.588 1.81l-3.395 2.472a1 1 0 00-.364 1.118l1.286 3.966c.3.922-.755 1.688-1.54 1.118l-3.394-2.472a1 1 0 00-1.176 0L5.51 17.68c-.784.57-1.84-.196-1.54-1.118l1.286-3.966a1 1 0 00-.364-1.118L1.497 9.394c-.783-.57-.38-1.81.588-1.81h4.191a1 1 0 00.95-.69l1.286-3.967z"/>
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
            
                            <!-- Texto de la reseña -->
                            <p class="text-gray-700 text-sm">{{ $reviews[$index]['text'] }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
            
            
            {{--  --}}
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
            </div>
    {{--  --}}        
        </div>
    </section>
{{--  --}}      
