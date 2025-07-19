<div>
    <section class="relative bg-white pt-40 pb-24 overflow-hidden max-h-[90vh]">
        <!-- Fondo con ilustración -->
        <div
            class="absolute inset-0 bg-[url('/bg-dibujos.svg')] bg-no-repeat bg-[length:600px] bg-right-top opacity-20 pointer-events-none">
        </div>

        <div class="container relative z-10 flex flex-col md:flex-row items-center gap-12">
            <!-- Texto -->
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold text-dark font-serif leading-tight mb-6">
                    Un espacio para reconectar con tu bienestar
                </h1>
                <p class="text-lg text-dark font-serif leading-relaxed">
                    Soy Juliana, nutricionista y coach ontológica. Acompaño desde la experiencia, el respeto y la
                    conciencia a quienes buscan sanar su relación con el cuerpo, la alimentación y su propósito.
                </p>
                <p class="italic text-dark font-serif text-right p-8">Con amor, Juliana ✨</p>
                <div>
                    <a href="#programas"
                        class="bg-orange text-dark px-6 py-3 rounded-lg font-semibold text-lg shadow hover:bg-light-orange transition inline-block">
                        Conocer programas
                    </a>
                </div>

            </div>

            <!-- Imagen -->
            <div class="md:w-1/2">
                <img src="{{ asset('tunos.jpg') }}" alt="Juliana Re"
                    class="rounded-xl shadow-lg w-full max-w-sm mx-auto object-cover">
            </div>
        </div>
    </section>
    <div class="h-6 w-full bg-green"></div>

    <livewire:components.stadistics />
    {{--
    <livewire:components.google-reviews /> --}}
    <livewire:pages.blog isPreview=true />
    <livewire:pages.recipes isPreview="true" />
    <livewire:pages.about-me isPreview=true />
    <livewire:components.programs />
</div>