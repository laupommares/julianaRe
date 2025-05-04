<div class="relative flex min-h-screen items-center text-dark">
    <div class="container flex w-full {{ $type === 'short' ? ' py-20' : 'py-24' }}">
        <div class="flex flex-col w-1/2 pr-16">
            <h1 class="font-slab text-4xl leading-10">¿Tenés preguntas <br> o deseas más información? <br>¡Contactame!
            </h1>
            <div class="bg-orange h-2 w-32 my-8 rounded-md"></div>
            <form wire:submit.prevent="enviarFormulario" class="flex flex-col gap-4">
                <div class="">
                    <label for="contact-name" class="block text-dark-gray pb-2">Nombre</label>
                    <input type="text" id="contact-name"
                        class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70"
                        placeholder="Ingresá tu correo electrónico" wire:model="name" required>
                </div>
                <div class="">
                    <label for="contact-email" class="block text-dark-gray pb-2">Email</label>
                    <input type="email" id="contact-email"
                        class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70"
                        placeholder="Ingresá tu correo electrónico" wire:model="email" required>
                </div>
                <div>
                    <label for="contact-issue" class="block text-dark-gray pb-2">Asunto del mensaje</label>
                    <select name="" id="contact-issue"
                        class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70"
                        placeholder="Ingresá tu correo electrónico" wire:model="issue">
                        <option value="" disabled {{ !$issue ? 'selected' : '' }}>Indicá el asunto de tu mensaje</option>
                        <option value="talleres">Talleres</option>
                        <option value="balance">Recuperá tu balance</option>
                        <option value="recursos-gratuitos">Recursos gratuitos</option>
                        <option value="otros">Otros</option>
                    </select>
                </div>
                <div>
                    <label for="contact-message" class="block text-dark-gray pb-2">Mensaje</label>
                    <textarea name="" id="contact-message" cols="30" rows="10"
                        class="border rounded w-full px-3 py-2 text-dark-gray border-blue bg-white placeholder:text-sm placeholder:text-dark-gray/70"
                        wire:model="message" placeholder="Escribí tu mensaje..."></textarea>
                </div>

                <button type="submit" class="bg-orange font-bold w-40 rounded-md h-12">Enviar</button>

            </form>
        </div>
    </div>
</div>