<div class="mx-auto px-4 sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] 2xl:max-w-[1320px] py-16
     {{ $type === 'long' ? 'h-screen' : 'h-fit' }}">
    <div class="flex flex-basis gap-8">
        <div class="max-w-[740px] text-dark flex flex-col gap-8">
            <h2 class="font-slab text-orange text-xl">Hola, ¿Cómo estas?</h2>
            <h1 class="text-5xl font-bold">Soy Juli Re</h1>
            <p class="text-base font-light">Licenciada en Nutrición y Couching. Te acompaño a descubrir un equilibrio real con la comida, sin culpas ni restricciones. Juntos crearemos hábitos sostenibles que nutran tu cuerpo y mente, guiándote hacia una vida más plena y consciente.</p>
            @if ($type === 'short')
            <a href="{{ route('livewire.pages.about-me') }}">
                <button class="bg-orange font-bold w-40 rounded-md h-12">Más sobre mi</button>
            </a>
            @endif
        </div>
        <div class="">
            <img class="w-[426px] rounded-md" src="{{ asset('juli-about.jpg') }}" alt="">
        </div>
    </div>
</div>