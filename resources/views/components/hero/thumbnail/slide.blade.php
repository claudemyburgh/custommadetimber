@props([
    "image",
])

<li class="splide__slide relative rounded-md">
    <img class="rounded-md absolute inset-0 w-full h-full object-cover" src="{{ Vite::asset($image) }}" alt="">
</li>
