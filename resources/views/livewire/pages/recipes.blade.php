
@extends('livewire.layouts.app')
@section('content')
<div class=" bg-blue flex items-center justify-center">
    <div class="bg-white h-full w-[calc(100%-80px)]">
        <div class="mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] my-32 flex flex-col gap-8">
            <div class="flex flex-col gap-8 justify-center items-center">
                <div class="w-full flex justify-center">
                    <h1 class="font-serif text-4xl text-dark">Recetas y tips para cocinar</h1>
                </div>
                <p class="leading-8 font-light text-base text-center text-dark">En esta sección, comparto algunas recetas, cosas que probé y te recomiendo, tips para cocinar y más. </p>
               
                <livewire:components.controls.search type="recipes">

            </div>
        </div>
    </div>
</div>
@endsection