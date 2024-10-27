@extends('layouts.app')

@section('content')

    <section id="couching" class="bg-cover p-24 bg-center min-h-screen bg-opacity-20" style="background-image: url('/sobremi1.png');">

        @livewire('prueba',['prueba'=> "Hola mundo pasado desde la vista",
                    'user'=> 1])
        

    </section>

    @livewireScripts
@endsection