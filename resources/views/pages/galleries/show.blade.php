<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('gallery', $gallery) }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <h1 class="text-3xl font-bold mb-6">{{ $gallery->title }}</h1>

        <div class="prose">
            @markdown($gallery->description)
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap md:gap-6 lg:gap-8 my-24 gallery" id="gallery">
            @foreach ($mediaWithSizes as $item)
                <a href="{{ $item['sizes']['screen']['url'] ?? '#' }}"
                   data-pswp-width="{{ $item['sizes']['screen']['width'] ?? '' }}"
                   data-pswp-height="{{ $item['sizes']['screen']['height'] ?? '' }}"
                   target="_blank"
                   class="aspect-[2/3] gsap-animate-up rounded-default bg-gray-50 border border-gray-50/50 relative hover:z-10">
                    <img class="aspect-[2/3] rounded-default object-cover w-full"
                         src="{{ $item['sizes']['card']['url'] ?? '#' }}"
                         alt="{{ $gallery->title }}">
                </a>
            @endforeach
        </div>
    </x-sections.top-of-page>


</x-app-layout>

