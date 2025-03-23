<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>

    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('galleries') }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-4 lg:space-y-6">
                <h1 class="text-3xl font-bold mb-6">Explore Our Craftsmanship – View Our Gallery</h1>
                <p>
                    Discover the artistry and precision of our work by exploring our gallery. From custom-built furniture and elegant cabinetry to stunning outdoor structures and detailed woodwork, our portfolio showcases the quality and
                    craftsmanship that set us apart.
                </p>
                <p>
                    Whether you're looking for inspiration or want to see the level of detail we bring to every project, our gallery highlights the beauty and functionality of our bespoke timber creations.
                </p>
                <p>
                    Browse our gallery today and experience the difference of expertly crafted woodwork.
                </p>
            </div>
            <div class="space-y-4 lg:space-y-6 relative">
                <img class="w-full relative -z-10 h-auto m-6 md:absolute md:-top-1/2" loading="lazy" src="{{ Vite::asset('resources/img/aboutpage/work-shop.webp') }}" alt="Work shop"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 my-24 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            @foreach($galleries as $gallery)
                <x-card class="relative isolate aspect-[4/3] overflow-clip flex group hover:shadow-2xl  shadow-black/25">
                    <div class="absolute inset-x-0 bottom-0 top-1/2 group-hover:translate-y-full transition-all bg-gradient-to-t from-gray-900 to-transparent"></div>
                    <a class="text-white font-semibold mt-auto text-shadow-sm text-shadow-black text-lg" wire:navigate.hover href="{{ route('galleries.show', $gallery) }}"> <span
                            class="relative block z-10 group-hover:translate-y-20 transition-all">{{
                    $gallery->title
                    }}</span>
                        <span class="w-full h-full absolute inset-0"></span>
                    </a>
                    <img loading="lazy" class="absolute w-full h-full group-hover:scale-110 object-cover transition-all inset-0 -z-10" src="{{ $gallery->getFirstMediaUrl('gallery', 'card') }}" alt="{{ $gallery->title }}">
                </x-card>

            @endforeach
        </div>


    </x-sections.top-of-page>

</x-app-layout>

