<section class="flex justify-center h-[680px] bg-blue p-10">
  <div x-data="{ showReview: false, comments: [], user: '', message: '' }" class="bg-white w-[1300px] flex flex-row text-dark">
    <!-- Sección de valoraciones -->
    <div class="basis-1/2 max-w-[380px] mt-12 mx-16">
      <h2 class="mb-4 font-bold">OPINION DE MIS PACIENTES</h2>
      <div class="flex flex-row mb-4">
        <p>Conocé como fue la experiencia de otros pacientes o compartí la tuya.</p>
      </div>
      <div class="flex flex-col gap-2">
        <div class="flex justify-center w-full flex-col mt-2">
          <div class="w-full text-dark">
            <label class="text-sm">
              Nombre
              <input type="text" name="nombre" x-model="user" class="bg-white p-2 mb-1 border border-blue w-full rounded-sm placeholder:Ingresá tu nombre">
            </label>
            <label class="text-sm">
              Reseña
              <textarea x-model="message" class="bg-white border p-2 h-24 border-blue w-full rounded-sm placeholder:Ingresa tu comentario"></textarea>
            </label>
          </div>
          <div class="flex justify-center">
            <button
              id="commentButton"
              type="button"
              class="bg-blue text-white rounded-sm text-base w-[324px] h-11 font-semibold mt-6"
              @click="if(user && message) { comments.push({ user: user, message: message }); user = ''; message = ''; }"
            >
              Compartí tu experiencia
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="basis-1/2 mt-12 w-full">
      <div class="border border-gray w-[720px] h-[500px] overflow-y-auto">
        <!-- Mostrar los comentarios -->
        <template x-for="comment in comments" :key="comment.user">
          <div class="flex flex-col mx-10 mt-4 p-4 border border-gray rounded-md">
            <div class="flex flex-row gap-2">
              <img src="juli.png" alt="" class="w-10 h-10">
              <p class="mt-2 font-semibold" x-text="comment.user"></p>
            </div>
            <p class="italic" x-text="'\'' + comment.message + '\''"></p>
          </div>
        </template>
      </div>
    </div>
  </div>
</section>
