<x-app-layout>
    <x-slot:seo>
        <x-meta-tags :$meta/>
    </x-slot:seo>
    <x-slot:breadcrumbs>
        {{ Breadcrumbs::render('projects') }}
    </x-slot:breadcrumbs>

    <x-sections.top-of-page>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="space-y-4 lg:space-y-6">
                <h1 class="text-3xl font-bold mb-6">Latest Project</h1>
                <p>
                    Our most recent project involved crafting bespoke timber interiors for a high-end residential property. The design featured custom-built cabinetry, elegant wooden wall paneling, and handcrafted furniture, all
                    meticulously
                    tailored to complement the home’s modern yet timeless aesthetic.
                </p>
                <p>
                    Using only premium hardwoods and precision craftsmanship, we seamlessly integrated functionality with sophisticated design. From the statement kitchen cabinetry to the intricate detailing in the living spaces, every
                    element
                    was
                    designed to enhance warmth, style, and durability.

                    This project showcases our dedication to quality, attention to detail, and passion for creating exquisite, lasting woodwork. Stay tuned for more of our latest transformations!
                </p>
            </div>
            <div class="space-y-4 lg:space-y-6 relative">
                <img class="w-full relative -z-10 h-auto m-6 md:absolute md:-top-1/2" loading="lazy" src="{{ Vite::asset('resources/img/aboutpage/work-shop.webp') }}" alt="Work shop"/>
            </div>
        </div>


        <div class="max-w-2xl mx-auto my-24">
            @if($projects->count())
                <x-timeline.1 :data="$projects" route="projects.show" date="project_date">
                </x-timeline.1>

            @else
                <p class="text-3xl font-bold bg-white/25 backdrop-blur-md -rotate-3 text-center border-[4px] p-4 border-gray-700 rounded-default">
                    Currently no project listed.
                </p>
            @endif
        </div>
    </x-sections.top-of-page>


</x-app-layout>

