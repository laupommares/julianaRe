
@extends('livewire.layouts.app')
@section('content')
    <div class=" bg-blue flex items-center justify-center">
        <div class="bg-white h-full w-[calc(100%-80px)]">
            <div class="mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] my-32 flex flex-col gap-8">
                <div class="flex flex-col gap-8  justify-center items-center">
                    <div class="w-full flex justify-center">
                        <h1 class="font-serif text-4xl text-dark">Consejos y bienestar</h1>
                    </div>
                    <p class="leading-8 font-light text-base text-center text-dark">En esta sección, comparto artículos, consejos y recursos sobre nutrición y bienestar que considero fundamentales para ayudarte a lograr un estilo de vida más saludable y equilibrado. 
                    ¡Todo lo que necesitas para sentirte mejor!</p>
                   
                    <livewire:components.controls.search/>
                </div>
                <div class="flex flex-row gap-8 flex-wrap">
                    @include('livewire.components.cards.blog-card', [
                        'image' => asset('tunos.jpg'),
                        'title' => '¿Cómo Conectar con lo que Comés?',
                        'description' => 'Descubrí cómo la atención plena en tus hábitos alimenticios puede transformar tu relación con la comida y mejorar tu bienestar general.',
                        'link' => url('/blog/articulo'),
                        'buttonText' => 'Leer artículo'
                    ])
                    @include('livewire.components.cards.blog-card', [
                        'image' => asset('tunos.jpg'),
                        'title' => '¿Cómo Conectar con lo que Comés?',
                        'description' => 'Descubrí cómo la atención plena en tus hábitos alimenticios puede transformar tu relación con la comida y mejorar tu bienestar general.',
                        'link' => url('/blog/articulo'),
                        'buttonText' => 'Leer artículo'
                    ])
                    @include('livewire.components.cards.blog-card', [
                        'image' => asset('tunos.jpg'),
                        'title' => '¿Cómo Conectar con lo que Comés?',
                        'description' => 'Descubrí cómo la atención plena en tus hábitos alimenticios puede transformar tu relación con la comida y mejorar tu bienestar general.',
                        'link' => url('/blog/articulo'),
                        'buttonText' => 'Leer artículo'
                    ])
                     @include('livewire.components.cards.blog-card', [
                        'image' => asset('tunos.jpg'),
                        'title' => '¿Cómo Conectar con lo que Comés?',
                        'description' => 'Descubrí cómo la atención plena en tus hábitos alimenticios puede transformar tu relación con la comida y mejorar tu bienestar general.',
                        'link' => url('/blog/articulo'),
                        'buttonText' => 'Leer artículo'
                    ])
                    @include('livewire.components.cards.blog-card', [
                        'image' => asset('tunos.jpg'),
                        'title' => '¿Cómo Conectar con lo que Comés?',
                        'description' => 'Descubrí cómo la atención plena en tus hábitos alimenticios puede transformar tu relación con la comida y mejorar tu bienestar general.',
                        'link' => url('/blog/articulo'),
                        'buttonText' => 'Leer artículo'
                    ])
                    @include('livewire.components.cards.blog-card', [
                        'image' => asset('tunos.jpg'),
                        'title' => '¿Cómo Conectar con lo que Comés?',
                        'description' => 'Descubrí cómo la atención plena en tus hábitos alimenticios puede transformar tu relación con la comida y mejorar tu bienestar general.',
                        'link' => url('/blog/articulo'),
                        'buttonText' => 'Leer artículo'
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection