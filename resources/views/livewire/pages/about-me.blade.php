<div class="container py-16 {{ $isPreview ? 'h-fit' : 'h-full' }}">
    <div class="flex {{ $isPreview ? '' : 'flex-wrap py-20' }} gap-8">
        <div class="text-dark flex flex-col gap-8">
            <h2 class="font-slab text-orange text-xl">Hola, ¿Cómo estás?</h2>
            <h1 class="text-4xl font-bold">Soy Juli Re</h1>

            @if ($isPreview)
                <p class="text-base font-light leading-[1.75rem]">
                    Licenciada en Nutrición y Coach Ontológico, y creo en el poder de los pequeños cambios para lograr grandes transformaciones. No se trata solo de qué comés, sino de cómo te sentís, qué querés para vos y cómo podés hacer que suceda.
                    <br><br>
                    A través de un enfoque integral, te acompaño a construir hábitos saludables sin restricciones ni culpas, combinando nutrición, emociones y bienestar. En ocasiones, trabajo con otros profesionales que comparten mi propósito de ayudar a otros, porque el cambio es más poderoso cuando se hace en equipo.
                    <br><br> 
                    ¿Querés dar el primer paso? ¡Contactame y empecemos!
                </p>
                <a href="{{ route('livewire.pages.about-me') }}">
                    <button class="bg-orange font-bold w-40 rounded-md h-12">Más sobre mí</button>
                </a>
            @else 
                <div class="relative">
                    <img class="w-[300px] md:w-[426px] rounded-md float-right ml-8 mb-8" src="{{ asset('juli-about.jpg') }}" alt="">

                    <p class="text-base font-light leading-[1.75rem]">
                        Licenciada en Nutrición y Coach Ontológico, y mi misión es ayudarte a construir un bienestar real, sin exigencias imposibles ni cambios pasajeros.
                        <br><br>
                        Desde hace años acompaño a personas en su camino de transformación, ayudándolas a conectar con su alimentación, sus emociones y su poder personal. Porque no se trata solo de lo que comemos, sino de cómo nos sentimos, qué queremos y qué hacemos para lograrlo.
                        <br><br>
                        <strong class="font-bold">Mi historia: más allá de la nutrición</strong> <br>
                        Cuando me gradué como Licenciada en Nutrición, sentía que sabía mucho sobre alimentos, pero me faltaban herramientas para ayudar realmente a las personas a cambiar. Vi de cerca cómo las emociones, las creencias y los hábitos condicionan nuestras elecciones, y por eso decidí formarme como Coach Ontológico, ampliando mi mirada sobre la salud y el bienestar.
                        <br><br>
                        Poco después, enfrenté un proceso oncológico que puso a prueba todo lo que había aprendido hasta ese momento. Viví en carne propia la importancia de escuchar al cuerpo, gestionar las emociones y rodearme de personas que me impulsaran a salir adelante. Esta experiencia no solo reforzó mi propósito, sino que me enseñó que el bienestar va mucho más allá de la comida: es un equilibrio entre cuerpo, mente y emociones.
                        <br><br>
                        Hoy, con esa certeza, acompaño a personas como vos a descubrir su propio camino hacia una vida más consciente y plena.
                        <br><br>
                        <strong class="font-bold">Mi enfoque: nutrición, hábitos y emociones</strong><br>
                        <span class="material-symbols-outlined text-orange text-3xl font-bold align-middle">chevron_right</span>
                         Te ayudo a tomar el control: Nada de dietas rígidas ni soluciones mágicas. Trabajamos juntos/as para crear hábitos que se adapten a tu vida real.<br>
                         <span class="material-symbols-outlined text-orange text-3xl font-bold align-middle">chevron_right</span>
                         Unimos nutrición y emociones: Comer no es solo un acto biológico, sino también emocional, social y personal.<br>
                         <span class="material-symbols-outlined text-orange text-3xl font-bold align-middle">chevron_right</span>
                         Trabajo con otros profesionales cuando es necesario: Psicólogos, entrenadores y otros especialistas que comparten mi propósito de ayudarte a lograr un bienestar integral.<br>
                         <span class="material-symbols-outlined text-orange text-3xl font-bold align-middle">chevron_right</span>
                         Acompaño con energía y motivación: No importa dónde estés hoy, lo importante es hacia dónde querés ir.<br><br>
                        Si querés aprender a cuidar tu cuerpo, entender tus emociones y sentirte mejor sin volver a empezar de cero una y otra vez, este es tu espacio.
                        <br><br>
                        📩 Escribime y empecemos este camino juntos/as.
                    </p>
                </div>
            @endif
        </div>
        
        @if ($isPreview)
            <div>
                <img class="min-w-[380px] rounded-md" src="{{ asset('juli-about.jpg') }}" alt="">
            </div>
        @endif
    </div>
</div>
