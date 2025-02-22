@props([
    'size' => 'md', // Tamaño: sm, md, lg, full
    'color' => 'default', // Color: primary, orange, danger, success
])

@php
    $baseClasses = "inline-flex items-center justify-center font-semibold rounded-md transition duration-200";

    // Definir tamaños
    $sizes = [
        'md' => 'w-[160px] h-12 text-base',
        'full' => 'w-full h-12',
    ];

    // Definir colores
    $colors = [
        'default' => 'bg-gray-500 text-white hover:bg-gray-600',
        'primary' => 'bg-blue-500 text-white hover:bg-blue-600',
        'orange' => 'bg-orange text-dark hover:bg-opacity-80',
        'danger' => 'bg-red-500 text-white hover:bg-red-600',
        'success' => 'bg-green-500 text-white hover:bg-green-600',
    ];

    // Aplicar las clases correctas
    $sizeClass = $sizes[$size] ?? $sizes['md'];
    $colorClass = $colors[$color] ?? $colors['default'];
@endphp

<button {{ $attributes->merge(['class' => "$baseClasses $sizeClass $colorClass"]) }}>
    {{ $slot }}
</button>
