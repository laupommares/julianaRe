
@extends('livewire.layouts.app')
@section('content')
    <header id="header" class="bg-cover bg-center h-[880px]" style="background-image: url('/header.png');">
        <div class="relative mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] flex justify-end h-full items-end">
            <div class="mb-10 card card-compact max-w-[462px] shadow-xl bg-white absolute bottom-0">
                <figure class="relative w-full p-4  ">
                    <img class="inset-0 w-full object-cover object-top h-[340px]" src="{{ asset('tunos.jpg') }}" alt="">
                </figure>
                <div class="card-body text-dark bg-white">
                    <h2 class="card-title">¡Comenzá hoy!</h2>
                    <p class="text-base">Diseño planes pensados para acompañarte a lograr el bienestar que mereces, respetando tus necesidades únicas. ¡Este es el primer paso hacia tu mejor versión!</p>
                    <div class="card-actions justify-end">
                        <button class="text-dark w-[430px] h-12 font-semibold bg-green px-4 py-2 rounded-sm text-xl ">Saca turno acá!</button>
                    </div>
                </div>
            </div>    
        </div>
    </header>
    <livewire:stadistics/>
    <livewire:google-reviews/>
    <livewire:components.blog-component/>
    <livewire:components.recipes-component />
    <livewire:components.about-component type="short"/>
    <livewire:contact/>
@endsection