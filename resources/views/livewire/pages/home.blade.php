<div>
    <header id="header" class="bg-cover bg-center h-[880px]" style="background-image: url('/header.png');">
        <div class="relative container flex justify-end h-full items-end">
            <div class="mb-14 card card-compact max-w-[462px] shadow-xl bg-white absolute bottom-0">
                <figure class="relative w-full pt-4 px-4 scroll-px-48">
                    <img class="inset-0 w-full object-cover object-top h-[340px]" src="{{ asset('tunos.jpg') }}" alt="">
                </figure>
                <div class="card-body text-dark bg-white">
                    <h2 class="card-title">Nutrición real para una vida real.</h2>
                    <p class="text-base">Soy Juliana Re, y estoy acá para acompañarte a lograr una relación más sana y real con la comida. Juntas vamos a construir hábitos sostenibles, sin dietas imposibles ni culpa.
                        Estás a un paso de empezar a sentirte mejor, en cuerpo y mente.</p>
                    <div class="card-actions justify-end">
                        <button class="text-dark w-[430px] h-10 flex items-center justify-center font-semibold bg-green px-4 py-2 rounded-sm text-xl">Conocer programas o sacar turno</button>
                    </div>
                </div>
            </div>    
        </div>
    </header>

    <livewire:components.stadistics/>
    {{--  <livewire:components.google-reviews/>  --}}    
    <livewire:pages.blog isPreview=true/>
    <livewire:pages.recipes isPreview="true"/>
    <livewire:pages.about-me isPreview=true/>
    <livewire:components.programs/>
    <livewire:components.controls.form-contact>
        
</div>