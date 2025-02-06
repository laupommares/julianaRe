<div class="mb-10 card card-compact w-[580px] h-[420px] shadow-xl bg-light-gray">
    <figure class="relative m-4">
        <img class="w-full object-cover h-[315px]" src="{{ $image }}" alt="">
    </figure>
    <div class="flex flex-col text-dark bg-white rounded-b-xl gap-4 p-4">
        <h2 class="card-title">{{ $title }}</h2>
        <p class="text-base">{{ $description }}</p>
        <a href="{{ $link }}">
            <button class="bg-orange font-bold w-40 rounded-md h-12">{{ $buttonText }}</button>
        </a>
    </div>
</div>
