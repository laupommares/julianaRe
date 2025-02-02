
@extends('livewire.layouts.app')
@section('content')
    <header id="heade" class="bg-cover bg-center h-screen" style="background-image: url('/header.png');">
        <div class="absolute bottom-0 right-0 mr-28 mb-10 transform card card-compact max-w-[462px] h-[600px] shadow-xl bg-white flex justify-center">
            <figure class="relative w-full p-4  ">
                <img class="inset-0 w-full object-cover h-[378px] rounded-ms" src="{{ asset('tunos.jpg') }}" alt="">
            </figure>
            <div class="card-body text-dark bg-white">
                <h2 class="card-title">¡Comenzá hoy!</h2>
                <p class="text-base ">Diseño planes pensados para acompañarte a lograr el bienestar que mereces, respetando tus necesidades únicas. ¡Este es el primer paso hacia tu mejor versión!</p>
                <div class="card-actions justify-end">
                    <button class="text-dark w-[430px] h-12 font-semibold bg-green px-4 py-2 rounded-sm">Saca turno acá!</button>
                </div>
            </div>
        </div>    
    </header>
    <livewire:coaching-nutrition/>
    <livewire:google-reviews />

    <livewire:contact/>
@endsection