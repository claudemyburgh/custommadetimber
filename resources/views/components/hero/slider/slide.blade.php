@props([
    "image",
    "title",
    "text"
])

<li class="splide__slide relative w-full h-full grid place-items-center">
    <div class="wrapper relative z-10">
        <div class="rounded-md p-4 backdrop-blur-md max-w-xl shadow-lg shadow-black/50">
            <h1 class="text-7xl text-shadow-md text-shadow-black text-primary-500 font-black relative z-10">
                {{ $title }}
            </h1>
            <p class="leading-loose mt-3 text-white  text-shadow-sm text-xl text-shadow-black/50">
                {{ $text }}
            </p>
        </div>

    </div>
    <img class="absolute inset-0 w-full h-full object-cover" src="{{ Vite::asset($image) }}" alt="">
</li>
