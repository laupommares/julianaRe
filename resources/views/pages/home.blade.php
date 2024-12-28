
@extends('livewire.layouts.app')
@section('content')
    <header id="heade" class="bg-cover bg-center h-screen" style="background-image: url('/header.png');">
        <div class="absolute bottom-0 right-0 mr-28 mb-10 transform card card-compact bg-base-100 w-[480px] shadow-xl">
            <figure class="relative h-[320px] w-full">
            <img class="absolute inset-0 h-full w-full object-cover object-top" src="{{ asset('tunos.jpg') }}" alt="">
            </figure>
            <div class="card-body text-dark bg-white">
                <h2 class="card-title">Empeza ahora!</h2>
                <p>Si queres que te acompañe a descubrir una nueva manera de relacionarte con la alimentación.</p>
                <div class="card-actions justify-end">
                    <button class="text-dark font-semibold bg-green px-4 py-2 rounded-sm">Saca turno acá!</button>
                </div>
            </div>
        </div>    
    </header>
    <livewire:coaching-nutrition/>
    <livewire:google-reviews />


    <livewire:rating/>
    <livewire:contact/>
@endsection