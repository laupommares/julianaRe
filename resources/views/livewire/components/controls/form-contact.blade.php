<div class="relative h-screen flex items-center text-dark {{ $type === 'short' ? ' py-16' : 'py-20' }}">
    <div class="container flex flex-basis">
        <div class="flex flex-col w-1/2 pr-16">
            <h1 class="font-slab text-4xl leading-10">¿Tenés preguntas <br> o deseas más información? <br>¡Contactame!</h1>
            <div class="bg-orange h-2 w-32 my-8 rounded-md"></div>
            <form action="" class="flex flex-col gap-4">
                <div class="">
                    <label for="login-email" class="block text-dark-gray pb-2">Nombre</label>
                    <input type="email" id="login-email" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico" wire:model="email" required>
                </div>
                <div class="">
                    <label for="login-email" class="block text-dark-gray pb-2">Email</label>
                    <input type="email" id="login-email" class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70" placeholder="Ingresá tu correo electrónico" wire:model="email" required>
                </div>
                <div>
                    <label for="login-email" class="block text-dark-gray pb-2">Email</label>
                    <textarea name="" id="" cols="30" rows="10"  class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70"  placeholder="Escribí tu mensaje..."></textarea>
                </div>
                <a href="">
                    <button class="bg-orange font-bold w-40 rounded-md h-12">Enviar</button>
                </a>
            </form>
        </div>
        <div class="bg-medium-gray absolute right-0 top-0 h-full flex items-center w-1/2 pl-16">
            <div class="text-white flex flex-col gap-6">
                <p class="text-xl font-flex">Atiendo de forma presencial y online. <br> ¡Elige la opción que mejor se adapte a vos!</p>
                <iframe class="rounded-md" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.2500803188964!2d-60.01779362316904!3d-34.9001731728495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bea516660933e9%3A0x2ea0a3e1f14e57ad!2sJuliana%20Re!5e0!3m2!1ses!2sar!4v1739842978510!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="flex flex-col gap-2">
                    <a href="https://wa.me/5492346483632" target="_blank" class="flex gap-2">
                        <img src="whatsapp-nutrucionista-juliana-re.png" alt="WhatsApp Juliana Re nutricionista" class="whatsapp-icon">
                        <span>+54 9 2346 483632</span>
                    </a>
                    <a href="mailto:tuemail@example.com" class="flex gap-2 items-center">
                        <img src="email-nutrucionista-juliana-re.png" alt="Email Juliana Re Nutricionista" class="email-icon">
                        <span>tuemail@example.com</span>
                    </a>
                </div>
                <div class="flex justify-end gap-4">
                    <a href="https://instagram.com/tuusuario" target="_blank" class="hover:opacity-75">
                        <img src="instagram-nutrucionista-juliana-re.png" alt="Instagram" class="w-6 h-6">
                    </a>
                    <a href="https://twitter.com/tuusuario" target="_blank" class="hover:opacity-75">
                        <img src="twiter-nutrucionista-juliana-re.png" alt="Twitter" class="w-6 h-6">
                    </a>
                    <a href="https://facebook.com/tuusuario" target="_blank" class="hover:opacity-75">
                        <img src="facebook-nutrucionista-juliana-re.png" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="https://youtube.com/tuusuario" target="_blank" class="hover:opacity-75">
                        <img src="youtube-nutrucionista-juliana-re.png" alt="YouTube" class="w-6 h-6">
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</div>
